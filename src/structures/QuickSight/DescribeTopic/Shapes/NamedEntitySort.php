<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property 'ASCENDING'|'DESCENDING' $Direction
 */
class NamedEntitySort extends Shape
{
    /**
     * @param array{
     *     FieldName: string,
     *     Direction: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
