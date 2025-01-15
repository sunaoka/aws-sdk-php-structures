<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListDashboardsRequest extends Request
{
    /**
     * @param array{
     *     projectId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
