<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListOmniDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string|null $namePrefix
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListOmniDashboardsRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     namePrefix?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
