<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
