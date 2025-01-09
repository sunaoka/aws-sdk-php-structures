<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPublishedVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property int $VersionNumber
 */
class UpdateDashboardPublishedVersionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     VersionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
