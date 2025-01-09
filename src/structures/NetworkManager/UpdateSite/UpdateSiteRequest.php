<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $SiteId
 * @property string $Description
 * @property Shapes\Location $Location
 */
class UpdateSiteRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     SiteId: string,
     *     Description?: string,
     *     Location?: Shapes\Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
