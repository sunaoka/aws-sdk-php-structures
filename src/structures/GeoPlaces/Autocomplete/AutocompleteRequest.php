<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryText
 * @property int<1, 20>|null $MaxResults
 * @property list<double>|null $BiasPosition
 * @property Shapes\AutocompleteFilter|null $Filter
 * @property 'MergeAllSpannedLocalities'|'EnumerateSpannedLocalities'|null $PostalCodeMode
 * @property list<'Core'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|null $IntendedUse
 * @property string|null $Key
 */
class AutocompleteRequest extends Request
{
    /**
     * @param array{
     *     QueryText: string,
     *     MaxResults?: int<1, 20>|null,
     *     BiasPosition?: list<double>|null,
     *     Filter?: Shapes\AutocompleteFilter|null,
     *     PostalCodeMode?: 'MergeAllSpannedLocalities'|'EnumerateSpannedLocalities'|null,
     *     AdditionalFeatures?: list<'Core'>|null,
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
