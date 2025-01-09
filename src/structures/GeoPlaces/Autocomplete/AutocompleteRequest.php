<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryText
 * @property int<1, 20> $MaxResults
 * @property list<double> $BiasPosition
 * @property Shapes\AutocompleteFilter $Filter
 * @property 'MergeAllSpannedLocalities'|'EnumerateSpannedLocalities' $PostalCodeMode
 * @property list<'Core'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse' $IntendedUse
 * @property string $Key
 */
class AutocompleteRequest extends Request
{
    /**
     * @param array{
     *     QueryText: string,
     *     MaxResults?: int<1, 20>,
     *     BiasPosition?: list<double>,
     *     Filter?: Shapes\AutocompleteFilter,
     *     PostalCodeMode?: 'MergeAllSpannedLocalities'|'EnumerateSpannedLocalities',
     *     AdditionalFeatures?: list<'Core'>,
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
