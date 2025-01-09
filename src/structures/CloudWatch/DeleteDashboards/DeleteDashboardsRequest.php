<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DashboardNames
 */
class DeleteDashboardsRequest extends Request
{
    /**
     * @param array{DashboardNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
