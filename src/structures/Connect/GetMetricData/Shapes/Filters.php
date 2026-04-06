<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Queues
 * @property list<'VOICE'|'CHAT'|'TASK'>|null $Channels
 * @property list<string>|null $RoutingProfiles
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     Queues?: list<string>|null,
     *     Channels?: list<'VOICE'|'CHAT'|'TASK'>|null,
     *     RoutingProfiles?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
