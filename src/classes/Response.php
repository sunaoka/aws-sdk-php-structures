<?php

namespace Sunaoka\Aws\Structures;

use Aws\Result;

class Response extends Result
{
    /**
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public function __get(string $name)
    {
        if (! array_key_exists($name, $this->toArray())) {
            $class = (new \ReflectionClass($this))->getShortName();

            throw new \InvalidArgumentException("Unknown property: {$class}->{$name}");
        }

        return $this[$name];
    }
}
