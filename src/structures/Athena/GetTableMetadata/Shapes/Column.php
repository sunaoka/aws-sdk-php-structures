<?php

namespace Sunaoka\Aws\Structures\Athena\GetTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Type
 * @property string|null $Comment
 */
class Column extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string|null,
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
