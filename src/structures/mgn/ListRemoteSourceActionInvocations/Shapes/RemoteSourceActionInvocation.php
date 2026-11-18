<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerArn
 * @property string|null $remoteSourceActionArn
 * @property string|null $ssmCommandInvocationID
 * @property 'PENDING'|'IN_PROGRESS'|'DELAYED'|'SUCCESS'|'CANCELLED'|'TIMED_OUT'|'FAILED'|'CANCELLING'|'STALLED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 */
class RemoteSourceActionInvocation extends Shape
{
    /**
     * @param array{
     *     sourceServerArn?: string|null,
     *     remoteSourceActionArn?: string|null,
     *     ssmCommandInvocationID?: string|null,
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
