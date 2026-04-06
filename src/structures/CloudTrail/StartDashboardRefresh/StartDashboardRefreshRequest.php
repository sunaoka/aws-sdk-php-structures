<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartDashboardRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DashboardId
 * @property array<string, string>|null $QueryParameterValues
 */
class StartDashboardRefreshRequest extends Request
{
    /**
     * @param array{
     *     DashboardId: string,
     *     QueryParameterValues?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
