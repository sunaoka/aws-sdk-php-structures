<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 */
class DescribeSnapshotRequest extends Request
{
    /**
     * @param array{SnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
