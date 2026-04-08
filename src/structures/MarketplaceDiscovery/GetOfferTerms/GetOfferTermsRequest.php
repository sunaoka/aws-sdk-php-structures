<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $offerId
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class GetOfferTermsRequest extends Request
{
    /**
     * @param array{
     *     offerId: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
