<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryText
 * @property int<1, 100> $MaxResults
 * @property int<1, 10> $MaxQueryRefinements
 * @property list<double> $BiasPosition
 * @property Shapes\SuggestFilter $Filter
 * @property list<'Core'|'TimeZone'|'Phonemes'|'Access'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse' $IntendedUse
 * @property string $Key
 */
class SuggestRequest extends Request
{
    /**
     * @param array{
     *     QueryText: string,
     *     MaxResults?: int<1, 100>,
     *     MaxQueryRefinements?: int<1, 10>,
     *     BiasPosition?: list<double>,
     *     Filter?: Shapes\SuggestFilter,
     *     AdditionalFeatures?: list<'Core'|'TimeZone'|'Phonemes'|'Access'>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     IntendedUse?: 'SingleUse',
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
