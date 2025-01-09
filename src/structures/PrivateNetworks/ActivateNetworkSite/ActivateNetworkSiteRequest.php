<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ActivateNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\CommitmentConfiguration $commitmentConfiguration
 * @property string $networkSiteArn
 * @property Shapes\Address $shippingAddress
 */
class ActivateNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     commitmentConfiguration?: Shapes\CommitmentConfiguration,
     *     networkSiteArn: string,
     *     shippingAddress: Shapes\Address
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
