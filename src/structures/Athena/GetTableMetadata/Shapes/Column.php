<?php

namespace Sunaoka\Aws\Structures\Athena\GetTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property string $Comment
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
