<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListConnectInstanceIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
