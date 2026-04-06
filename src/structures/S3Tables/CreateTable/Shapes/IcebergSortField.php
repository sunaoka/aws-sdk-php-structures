<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sourceId
 * @property string $transform
 * @property 'asc'|'desc' $direction
 * @property 'nulls-first'|'nulls-last' $nullOrder
 */
class IcebergSortField extends Shape
{
    /**
     * @param array{
     *     sourceId: int,
     *     transform: string,
     *     direction: 'asc'|'desc',
     *     nullOrder: 'nulls-first'|'nulls-last'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
