<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dashboardId
 */
class DescribeDashboardRequest extends Request
{
    /**
     * @param array{dashboardId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
