<?php

namespace AwoAPI\Entity;

/**
 * Class Base
 *
 * @package AwoAPI\Entity
 */
class Base
{
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
     * Перевод имени из snake в camel case
     * @param string $name
     * @return string
     */
    protected function getPropertyName(string $name): string
    {
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
