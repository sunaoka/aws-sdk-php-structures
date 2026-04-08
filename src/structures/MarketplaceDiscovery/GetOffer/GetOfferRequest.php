<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offerId
 */
class GetOfferRequest extends Request
{
    /**
     * @param array{offerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
