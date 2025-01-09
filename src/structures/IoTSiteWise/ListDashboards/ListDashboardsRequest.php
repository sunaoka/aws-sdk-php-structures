<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
