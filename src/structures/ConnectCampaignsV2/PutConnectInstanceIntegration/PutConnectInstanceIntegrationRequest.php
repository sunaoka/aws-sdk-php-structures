<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property Shapes\IntegrationConfig $integrationConfig
 */
class PutConnectInstanceIntegrationRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     integrationConfig: Shapes\IntegrationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
