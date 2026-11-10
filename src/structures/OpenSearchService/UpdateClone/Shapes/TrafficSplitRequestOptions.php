<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateClone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ShiftReadTrafficPercent' $Strategy
 * @property int<0, 100> $CloneReadTrafficPercent
 */
class TrafficSplitRequestOptions extends Shape
{
    /**
     * @param array{
     *     Strategy: 'ShiftReadTrafficPercent',
     *     CloneReadTrafficPercent: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
