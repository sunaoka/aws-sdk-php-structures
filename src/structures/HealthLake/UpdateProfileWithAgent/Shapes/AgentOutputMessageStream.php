<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextMessageEvent|null $TextMessageEvent
 * @property ProgressEvent|null $ProgressEvent
 * @property HeartbeatEvent|null $HeartbeatEvent
 * @property ErrorEvent|null $ErrorEvent
 * @property EndOfOutputEvent|null $EndOfOutputEvent
 */
class AgentOutputMessageStream extends Shape
{
    /**
     * @param array{
     *     TextMessageEvent?: TextMessageEvent|null,
     *     ProgressEvent?: ProgressEvent|null,
     *     HeartbeatEvent?: HeartbeatEvent|null,
     *     ErrorEvent?: ErrorEvent|null,
     *     EndOfOutputEvent?: EndOfOutputEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
