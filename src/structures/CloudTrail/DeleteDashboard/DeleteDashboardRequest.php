<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeleteDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardId
 */
class DeleteDashboardRequest extends Request
{
    /**
     * @param array{DashboardId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
