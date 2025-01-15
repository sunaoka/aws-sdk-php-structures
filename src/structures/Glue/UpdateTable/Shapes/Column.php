<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Type
 * @property string|null $Comment
 * @property array<string, string>|null $Parameters
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string|null,
     *     Comment?: string|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
