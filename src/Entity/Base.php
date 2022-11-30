<?php

namespace AwoAPI\Entity;

/**
 * Class Base
 *
 * @package AwoAPI\Entity
 */
class Base
{
    protected $mapping = [];

    public function __call($name, $arguments)
    {
        $prefix = substr($name, 0, 3);
        if ($prefix === 'get') {
            $fieldname = lcfirst(substr($name, 3));
            if ($this->isProperty($fieldname)) {
                return $this->$fieldname;
            }
        }
        throw new \Exception("Call to undefined method " . $name);
    }

    /**
     * Заполнение свойств класса данными из массива
     * Данные берутся из массива, если индекс массива совпадает с именем свойства класса
     * @param array $data
     * @return $this
     */
    public function setData(array $data): self
    {
        foreach ($data as $key => $value) {
            $name = $this->getPropertyName($key);
            if ($this->isProperty($name)) {
                $this->$name = $value;
            }
        }
        return $this;
    }

    /**
     * Конвертация имен свойств класса.
     * Если имя не указано в таблице для маппинга, то делается
     * перевод имени из snake в camel case
     * @param string $name
     * @return string
     */
    protected function getPropertyName(string $name): string
    {
        if (isset($this->mapping) && isset($this->mapping[$name])) {
            return $this->mapping[$name];
        }
        return lcfirst(implode('', array_map("ucfirst", explode('_', $name))));
    }

    /**
     * Проверяет есть в классе свойство с заданым именем или нет
     * @param string $name
     * @return bool
     */
    protected function isProperty(string $name): bool
    {
        return property_exists($this, $name);
    }
}
