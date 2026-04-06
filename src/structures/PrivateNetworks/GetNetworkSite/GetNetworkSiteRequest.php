<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkSiteArn
 */
class GetNetworkSiteRequest extends Request
{
    /**
     * @param array{networkSiteArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
