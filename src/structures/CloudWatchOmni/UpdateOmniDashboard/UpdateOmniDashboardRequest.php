<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateOmniDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $dashboardId
 * @property string|null $body
 * @property string|null $name
 * @property string|null $description
 */
class UpdateOmniDashboardRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     dashboardId: string,
     *     body?: string|null,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
