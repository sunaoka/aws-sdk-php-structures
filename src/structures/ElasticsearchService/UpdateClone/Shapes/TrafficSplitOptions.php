<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateClone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrafficPercents $Current
 * @property TrafficPercents $Target
 * @property 'InProgress'|'Completed'|'Failed' $Status
 */
class TrafficSplitOptions extends Shape
{
    /**
     * @param array{
     *     Current: TrafficPercents,
     *     Target: TrafficPercents,
     *     Status: 'InProgress'|'Completed'|'Failed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
