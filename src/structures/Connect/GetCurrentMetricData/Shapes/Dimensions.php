<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueueReference $Queue
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property RoutingProfileReference $RoutingProfile
 * @property string $RoutingStepExpression
 */
class Dimensions extends Shape
{
    /**
     * @param array{
     *     Queue?: QueueReference,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     RoutingProfile?: RoutingProfileReference,
     *     RoutingStepExpression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
