<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offerSetId
 */
class GetOfferSetRequest extends Request
{
    /**
     * @param array{offerSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
