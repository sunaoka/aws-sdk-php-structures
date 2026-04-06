<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string $Text
 * @property list<double>|null $BiasPosition
 * @property list<double>|null $FilterBBox
 * @property list<string>|null $FilterCountries
 * @property int<1, 15>|null $MaxResults
 * @property string|null $Language
 * @property list<string>|null $FilterCategories
 * @property string|null $Key
 */
class SearchPlaceIndexForSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Text: string,
     *     BiasPosition?: list<double>|null,
     *     FilterBBox?: list<double>|null,
     *     FilterCountries?: list<string>|null,
     *     MaxResults?: int<1, 15>|null,
     *     Language?: string|null,
     *     FilterCategories?: list<string>|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
