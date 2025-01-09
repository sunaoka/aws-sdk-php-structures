<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListConnectInstanceIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
