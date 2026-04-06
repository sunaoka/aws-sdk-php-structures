<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardsQAConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'ENABLED'|'DISABLED' $DashboardsQAStatus
 */
class UpdateDashboardsQAConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardsQAStatus: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
