<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardName
 */
class GetDashboardRequest extends Request
{
    /**
     * @param array{DashboardName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
