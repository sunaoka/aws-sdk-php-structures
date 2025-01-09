<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $SnapshotJobId
 */
class DescribeDashboardSnapshotJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     SnapshotJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
