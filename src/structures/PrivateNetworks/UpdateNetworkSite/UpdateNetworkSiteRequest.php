<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $networkSiteArn
 */
class UpdateNetworkSiteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     networkSiteArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
