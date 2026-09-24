<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $locale
 * @property string $offerId
 */
class GetOfferRequest extends Request
{
    /**
     * @param array{
     *     locale?: string|null,
     *     offerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
