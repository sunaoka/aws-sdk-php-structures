<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ActivateNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\CommitmentConfiguration|null $commitmentConfiguration
 * @property string $networkSiteArn
 * @property Shapes\Address $shippingAddress
 */
class ActivateNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     commitmentConfiguration?: Shapes\CommitmentConfiguration|null,
     *     networkSiteArn: string,
     *     shippingAddress: Shapes\Address
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
