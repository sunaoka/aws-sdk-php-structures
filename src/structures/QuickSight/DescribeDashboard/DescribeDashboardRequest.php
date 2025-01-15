<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property int<1, max>|null $VersionNumber
 * @property string|null $AliasName
 */
class DescribeDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     VersionNumber?: int<1, max>|null,
     *     AliasName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
