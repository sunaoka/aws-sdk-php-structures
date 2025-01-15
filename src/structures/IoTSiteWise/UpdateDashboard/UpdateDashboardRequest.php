<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dashboardId
 * @property string $dashboardName
 * @property string|null $dashboardDescription
 * @property string $dashboardDefinition
 * @property string|null $clientToken
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     dashboardId: string,
     *     dashboardName: string,
     *     dashboardDescription?: string|null,
     *     dashboardDefinition: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
