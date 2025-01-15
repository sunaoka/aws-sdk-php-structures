<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\CampaignFilters|null $filters
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     filters?: Shapes\CampaignFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
