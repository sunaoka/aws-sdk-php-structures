<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SourceId
 * @property string $Transform
 * @property 'asc'|'desc' $Direction
 * @property 'nulls-first'|'nulls-last' $NullOrder
 */
class IcebergSortField extends Shape
{
    /**
     * @param array{
     *     SourceId: int,
     *     Transform: string,
     *     Direction: 'asc'|'desc',
     *     NullOrder: 'nulls-first'|'nulls-last'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
