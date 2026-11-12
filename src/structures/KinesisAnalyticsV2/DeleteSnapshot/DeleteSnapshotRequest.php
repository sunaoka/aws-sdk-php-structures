<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 * @property \Aws\Api\DateTimeResult $SnapshotCreationTimestamp
 */
class DeleteSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotCreationTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
