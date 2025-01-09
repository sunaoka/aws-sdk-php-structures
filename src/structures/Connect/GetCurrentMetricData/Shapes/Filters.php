<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Queues
 * @property list<'VOICE'|'CHAT'|'TASK'|'EMAIL'> $Channels
 * @property list<string> $RoutingProfiles
 * @property list<string> $RoutingStepExpressions
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     Queues?: list<string>,
     *     Channels?: list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>,
     *     RoutingProfiles?: list<string>,
     *     RoutingStepExpressions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
