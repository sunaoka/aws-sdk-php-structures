<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property list<double>|null $BiasPosition
 * @property list<double>|null $FilterBBox
 * @property list<string>|null $FilterCountries
 * @property int<1, 50>|null $MaxResults
 * @property list<double>|null $ResultBBox
 * @property string $DataSource
 * @property string|null $Language
 * @property list<string>|null $FilterCategories
 */
class SearchPlaceIndexForTextSummary extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     BiasPosition?: list<double>|null,
     *     FilterBBox?: list<double>|null,
     *     FilterCountries?: list<string>|null,
     *     MaxResults?: int<1, 50>|null,
     *     ResultBBox?: list<double>|null,
     *     DataSource: string,
     *     Language?: string|null,
     *     FilterCategories?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
