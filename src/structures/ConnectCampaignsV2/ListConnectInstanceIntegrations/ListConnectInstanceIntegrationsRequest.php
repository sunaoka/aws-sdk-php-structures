<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListConnectInstanceIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
