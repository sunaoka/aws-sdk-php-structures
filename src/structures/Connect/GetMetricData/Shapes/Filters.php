<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Queues
 * @property list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>|null $Channels
 * @property list<string>|null $RoutingProfiles
 * @property list<string>|null $RoutingStepExpressions
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     Queues?: list<string>|null,
     *     Channels?: list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>|null,
     *     RoutingProfiles?: list<string>|null,
     *     RoutingStepExpressions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
