<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $remoteSourceActionID
 * @property string|null $connectorOwnerAccountID
 * @property 'PENDING'|'IN_PROGRESS'|'DELAYED'|'SUCCESS'|'CANCELLED'|'TIMED_OUT'|'FAILED'|'CANCELLING'|'STALLED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 */
class RemoteSourceActionInvocationResult extends Shape
{
    /**
     * @param array{
     *     remoteSourceActionID?: string|null,
     *     connectorOwnerAccountID?: string|null,
     *     status?: 'PENDING'|'IN_PROGRESS'|'DELAYED'|'SUCCESS'|'CANCELLED'|'TIMED_OUT'|'FAILED'|'CANCELLING'|'STALLED'|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
