<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property Shapes\IntegrationIdentifier $integrationIdentifier
 */
class DeleteConnectInstanceIntegrationRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     integrationIdentifier: Shapes\IntegrationIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
