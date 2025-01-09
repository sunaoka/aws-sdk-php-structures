<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\DeleteNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $networkSiteArn
 */
class DeleteNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     networkSiteArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
