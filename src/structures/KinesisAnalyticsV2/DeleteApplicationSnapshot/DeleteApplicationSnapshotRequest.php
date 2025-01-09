<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $SnapshotName
 * @property \Aws\Api\DateTimeResult $SnapshotCreationTimestamp
 */
class DeleteApplicationSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     SnapshotName: string,
     *     SnapshotCreationTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
