<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $networkSiteArn
 */
class UpdateNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     networkSiteArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
