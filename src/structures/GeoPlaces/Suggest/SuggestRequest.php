<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryText
 * @property int<1, 100>|null $MaxResults
 * @property int<1, 10>|null $MaxQueryRefinements
 * @property list<double>|null $BiasPosition
 * @property Shapes\SuggestFilter|null $Filter
 * @property list<'Core'|'TimeZone'|'Phonemes'|'Access'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|null $IntendedUse
 * @property string|null $Key
 */
class SuggestRequest extends Request
{
    /**
     * @param array{
     *     QueryText: string,
     *     MaxResults?: int<1, 100>|null,
     *     MaxQueryRefinements?: int<1, 10>|null,
     *     BiasPosition?: list<double>|null,
     *     Filter?: Shapes\SuggestFilter|null,
     *     AdditionalFeatures?: list<'Core'|'TimeZone'|'Phonemes'|'Access'>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     IntendedUse?: 'SingleUse'|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
