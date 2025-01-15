<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $SerializationLibrary
 * @property array<string, string>|null $Parameters
 */
class SerDeInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     SerializationLibrary?: string|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
