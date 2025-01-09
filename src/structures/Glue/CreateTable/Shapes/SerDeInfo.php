<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $SerializationLibrary
 * @property array<string, string> $Parameters
 */
class SerDeInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     SerializationLibrary?: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
