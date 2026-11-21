<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $locale
 * @property string $listingId
 * @property list<'CASE_STUDY'|'SPECIALIZATION_DETAIL'|'TRUST_CENTER_SOURCE'|'TRUST_CENTER_CERTIFICATION'|'TRUST_CENTER_DOCUMENT'|'TRUST_CENTER_CONTROL'|'TRUST_CENTER_FAQ'|'TRUST_CENTER_UPDATE'> $attributeTypes
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListListingAttributesRequest extends Request
{
    /**
     * @param array{
     *     locale?: string|null,
     *     listingId: string,
     *     attributeTypes: list<'CASE_STUDY'|'SPECIALIZATION_DETAIL'|'TRUST_CENTER_SOURCE'|'TRUST_CENTER_CERTIFICATION'|'TRUST_CENTER_DOCUMENT'|'TRUST_CENTER_CONTROL'|'TRUST_CENTER_FAQ'|'TRUST_CENTER_UPDATE'>,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
