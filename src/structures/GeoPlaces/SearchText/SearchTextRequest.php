<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryText
 * @property string $QueryId
 * @property int $MaxResults
 * @property list<double> $BiasPosition
 * @property Shapes\SearchTextFilter $Filter
 * @property list<'TimeZone'|'Phonemes'|'Access'|'Contact'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse'|'Storage' $IntendedUse
 * @property string $NextToken
 * @property string $Key
 */
class SearchTextRequest extends Request
{
    /**
     * @param array{
     *     QueryText?: string,
     *     QueryId?: string,
     *     MaxResults?: int,
     *     BiasPosition?: list<double>,
     *     Filter?: Shapes\SearchTextFilter,
     *     AdditionalFeatures?: list<'TimeZone'|'Phonemes'|'Access'|'Contact'>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     IntendedUse?: 'SingleUse'|'Storage',
     *     NextToken?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
