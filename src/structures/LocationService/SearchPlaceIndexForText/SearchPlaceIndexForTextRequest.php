<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string $Text
 * @property list<double> $BiasPosition
 * @property list<double> $FilterBBox
 * @property list<string> $FilterCountries
 * @property int<1, 50> $MaxResults
 * @property string $Language
 * @property list<string> $FilterCategories
 * @property string $Key
 */
class SearchPlaceIndexForTextRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Text: string,
     *     BiasPosition?: list<double>,
     *     FilterBBox?: list<double>,
     *     FilterCountries?: list<string>,
     *     MaxResults?: int<1, 50>,
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
