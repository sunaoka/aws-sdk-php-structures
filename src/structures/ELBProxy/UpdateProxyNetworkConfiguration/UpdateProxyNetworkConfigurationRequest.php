<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property Shapes\UpdateProxyVpcConfiguration $vpcConfiguration
 */
class UpdateProxyNetworkConfigurationRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     vpcConfiguration: Shapes\UpdateProxyVpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
