<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<double> $QueryPosition
 * @property int<1, 21000000>|null $QueryRadius
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\SearchNearbyFilter|null $Filter
 * @property list<'TimeZone'|'Phonemes'|'Access'|'Contact'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|'Storage'|null $IntendedUse
 * @property string|null $NextToken
 * @property string|null $Key
 */
class SearchNearbyRequest extends Request
{
    /**
     * @param array{
     *     QueryPosition: list<double>,
     *     QueryRadius?: int<1, 21000000>|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filter?: Shapes\SearchNearbyFilter|null,
     *     AdditionalFeatures?: list<'TimeZone'|'Phonemes'|'Access'|'Contact'>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     IntendedUse?: 'SingleUse'|'Storage'|null,
     *     NextToken?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
