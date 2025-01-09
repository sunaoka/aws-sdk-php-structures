<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dashboardId
 * @property string $dashboardName
 * @property string $dashboardDescription
 * @property string $dashboardDefinition
 * @property string $clientToken
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     dashboardId: string,
     *     dashboardName: string,
     *     dashboardDescription?: string,
     *     dashboardDefinition: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
