<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGatewayCapabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $capabilityNamespace
 */
class DescribeGatewayCapabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     capabilityNamespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
