<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardName
 * @property string $DashboardBody
 */
class PutDashboardRequest extends Request
{
    /**
     * @param array{
     *     DashboardName: string,
     *     DashboardBody: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
