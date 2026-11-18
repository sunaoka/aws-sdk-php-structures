<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $remoteSourceActionJobID
 * @property string|null $arn
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'STALLED'|null $status
 * @property list<string>|null $sourceServerArns
 * @property list<string>|null $remoteSourceActionArns
 * @property string|null $connectorArn
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string|null $statusReason
 * @property array<string, string>|null $tags
 */
class RemoteSourceActionJob extends Shape
{
    /**
     * @param array{
     *     remoteSourceActionJobID?: string|null,
     *     arn?: string|null,
     *     status?: 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'STALLED'|null,
     *     sourceServerArns?: list<string>|null,
     *     remoteSourceActionArns?: list<string>|null,
     *     connectorArn?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     statusReason?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
