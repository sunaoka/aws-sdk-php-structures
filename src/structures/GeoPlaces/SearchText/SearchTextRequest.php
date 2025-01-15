<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $QueryText
 * @property string|null $QueryId
 * @property int<1, 100>|null $MaxResults
 * @property list<double>|null $BiasPosition
 * @property Shapes\SearchTextFilter|null $Filter
 * @property list<'TimeZone'|'Phonemes'|'Access'|'Contact'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|'Storage'|null $IntendedUse
 * @property string|null $NextToken
 * @property string|null $Key
 */
class SearchTextRequest extends Request
{
    /**
     * @param array{
     *     QueryText?: string|null,
     *     QueryId?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     BiasPosition?: list<double>|null,
     *     Filter?: Shapes\SearchTextFilter|null,
     *     AdditionalFeatures?: list<'TimeZone'|'Phonemes'|'Access'|'Contact'>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     IntendedUse?: 'SingleUse'|'Storage'|null,
     *     NextToken?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
