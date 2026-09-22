<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetOmniDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $dashboardId
 */
class GetOmniDashboardRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     dashboardId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
