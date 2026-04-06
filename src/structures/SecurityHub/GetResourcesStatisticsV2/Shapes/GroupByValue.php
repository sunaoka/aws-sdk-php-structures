<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldValue
 * @property int|null $Count
 */
class GroupByValue extends Shape
{
    /**
     * @param array{
     *     FieldValue?: string|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
