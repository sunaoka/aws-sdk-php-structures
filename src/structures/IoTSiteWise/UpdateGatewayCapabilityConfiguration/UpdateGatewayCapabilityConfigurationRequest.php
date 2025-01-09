<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateGatewayCapabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $capabilityNamespace
 * @property string $capabilityConfiguration
 */
class UpdateGatewayCapabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     capabilityNamespace: string,
     *     capabilityConfiguration: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
