<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 * @property string $SnapshotOperationId
 */
class DescribeSnapshotOperationRequest extends Request
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotOperationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
