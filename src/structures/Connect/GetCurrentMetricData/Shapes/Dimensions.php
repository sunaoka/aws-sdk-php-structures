<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueueReference|null $Queue
 * @property 'VOICE'|'CHAT'|'TASK'|null $Channel
 * @property RoutingProfileReference|null $RoutingProfile
 */
class Dimensions extends Shape
{
    /**
     * @param array{
     *     Queue?: QueueReference|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|null,
     *     RoutingProfile?: RoutingProfileReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
