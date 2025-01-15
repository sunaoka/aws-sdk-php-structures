<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $SiteId
 * @property string|null $Description
 * @property Shapes\Location|null $Location
 */
class UpdateSiteRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     SiteId: string,
     *     Description?: string|null,
     *     Location?: Shapes\Location|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
