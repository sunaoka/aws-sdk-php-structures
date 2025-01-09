<?php

namespace Sunaoka\Aws\Structures\Glue\UpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property string $Comment
 * @property array<string, string> $Parameters
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string,
     *     Comment?: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
