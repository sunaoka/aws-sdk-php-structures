<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CampaignFilters|null $filters
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\CampaignFilters|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
