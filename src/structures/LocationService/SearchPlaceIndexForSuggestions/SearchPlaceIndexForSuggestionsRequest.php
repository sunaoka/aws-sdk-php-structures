<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string $Text
 * @property list<double> $BiasPosition
 * @property list<double> $FilterBBox
 * @property list<string> $FilterCountries
 * @property int $MaxResults
 * @property string $Language
 * @property list<string> $FilterCategories
 * @property string $Key
 */
class SearchPlaceIndexForSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Text: string,
     *     BiasPosition?: list<double>,
     *     FilterBBox?: list<double>,
     *     FilterCountries?: list<string>,
     *     MaxResults?: int,
     *     Language?: string,
     *     FilterCategories?: list<string>,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
