<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteOmniDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $dashboardId
 */
class DeleteOmniDashboardRequest extends Request
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
