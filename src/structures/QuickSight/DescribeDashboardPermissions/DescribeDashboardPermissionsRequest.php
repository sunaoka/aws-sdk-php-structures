<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 */
class DescribeDashboardPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
