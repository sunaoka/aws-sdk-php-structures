<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardId
 */
class GetDashboardRequest extends Request
{
    /**
     * @param array{DashboardId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
