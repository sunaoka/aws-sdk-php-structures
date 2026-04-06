<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListCampaigns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $status
 * @property 'METADATA_ONLY'|null $listResponseScope
 */
class ListCampaignsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     status?: string|null,
     *     listResponseScope?: 'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
