<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $locale
 * @property string $listingId
 */
class GetListingRequest extends Request
{
    /**
     * @param array{
     *     locale?: string|null,
     *     listingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
