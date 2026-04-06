<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $BiasPosition
 * @property string $DataSource
 * @property list<double>|null $FilterBBox
 * @property list<string>|null $FilterCategories
 * @property list<string>|null $FilterCountries
 * @property string|null $Language
 * @property int<1, 50>|null $MaxResults
 * @property list<double>|null $ResultBBox
 * @property string $Text
 */
class SearchPlaceIndexForTextSummary extends Shape
{
    /**
     * @param array{
     *     BiasPosition?: list<double>|null,
     *     DataSource: string,
     *     FilterBBox?: list<double>|null,
     *     FilterCategories?: list<string>|null,
     *     FilterCountries?: list<string>|null,
     *     Language?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     ResultBBox?: list<double>|null,
     *     Text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
