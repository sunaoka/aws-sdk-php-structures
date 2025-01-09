<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property int $VersionNumber
 * @property string $AliasName
 */
class DescribeDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     VersionNumber?: int,
     *     AliasName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
