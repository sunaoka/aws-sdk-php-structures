<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDateTime
 * @property \Aws\Api\DateTimeResult $LastModifiedDateTime
 * @property \Aws\Api\DateTimeResult $EndDateTime
 * @property \Aws\Api\DateTimeResult $IdleSinceDateTime
 * @property 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED' $State
 * @property string $StateChangeReason
 */
class SessionStatus extends Shape
{
    /**
     * @param array{
     *     StartDateTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedDateTime?: \Aws\Api\DateTimeResult,
     *     EndDateTime?: \Aws\Api\DateTimeResult,
     *     IdleSinceDateTime?: \Aws\Api\DateTimeResult,
     *     State?: 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED',
     *     StateChangeReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
