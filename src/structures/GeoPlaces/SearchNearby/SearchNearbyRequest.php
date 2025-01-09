<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<double> $QueryPosition
 * @property int<1, 21000000> $QueryRadius
 * @property int<1, 100> $MaxResults
 * @property Shapes\SearchNearbyFilter $Filter
 * @property list<'TimeZone'|'Phonemes'|'Access'|'Contact'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse'|'Storage' $IntendedUse
 * @property string $NextToken
 * @property string $Key
 */
class SearchNearbyRequest extends Request
{
    /**
     * @param array{
     *     QueryPosition: list<double>,
     *     QueryRadius?: int<1, 21000000>,
     *     MaxResults?: int<1, 100>,
     *     Filter?: Shapes\SearchNearbyFilter,
     *     AdditionalFeatures?: list<'TimeZone'|'Phonemes'|'Access'|'Contact'>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     IntendedUse?: 'SingleUse'|'Storage',
     *     NextToken?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
