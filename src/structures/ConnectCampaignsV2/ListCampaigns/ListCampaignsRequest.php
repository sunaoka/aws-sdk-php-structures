<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\CampaignFilters $filters
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     filters?: Shapes\CampaignFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
