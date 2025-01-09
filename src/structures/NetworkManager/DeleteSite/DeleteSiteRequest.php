<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $SiteId
 */
class DeleteSiteRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     SiteId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
