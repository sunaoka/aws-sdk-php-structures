<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dashboardId
 * @property string|null $clientToken
 */
class DeleteDashboardRequest extends Request
{
    /**
     * @param array{
     *     dashboardId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
