<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<double>|null $BiasPosition
 * @property list<double>|null $FilterBBox
 * @property list<string>|null $FilterCategories
 * @property list<string>|null $FilterCountries
 * @property string $IndexName
 * @property string|null $Key
 * @property string|null $Language
 * @property int<1, 15>|null $MaxResults
 * @property string $Text
 */
class SearchPlaceIndexForSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     BiasPosition?: list<double>|null,
     *     FilterBBox?: list<double>|null,
     *     FilterCategories?: list<string>|null,
     *     FilterCountries?: list<string>|null,
     *     IndexName: string,
     *     Key?: string|null,
     *     Language?: string|null,
     *     MaxResults?: int<1, 15>|null,
     *     Text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
