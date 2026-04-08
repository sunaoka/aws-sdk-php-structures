<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $listingId
 */
class GetListingRequest extends Request
{
    /**
     * @param array{listingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
