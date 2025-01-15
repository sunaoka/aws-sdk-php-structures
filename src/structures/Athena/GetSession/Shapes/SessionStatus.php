<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartDateTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 * @property \Aws\Api\DateTimeResult|null $IdleSinceDateTime
 * @property 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED'|null $State
 * @property string|null $StateChangeReason
 */
class SessionStatus extends Shape
{
    /**
     * @param array{
     *     StartDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null,
     *     IdleSinceDateTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED'|null,
     *     StateChangeReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
