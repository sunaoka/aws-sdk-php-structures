<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property 'ASC'|'DESC' $Direction
 */
class FieldSort extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Direction: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
