<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property list<double> $BiasPosition
 * @property list<double> $FilterBBox
 * @property list<string> $FilterCountries
 * @property int<1, 50> $MaxResults
 * @property list<double> $ResultBBox
 * @property string $DataSource
 * @property string $Language
 * @property list<string> $FilterCategories
 */
class SearchPlaceIndexForTextSummary extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     BiasPosition?: list<double>,
     *     FilterBBox?: list<double>,
     *     FilterCountries?: list<string>,
     *     MaxResults?: int<1, 50>,
     *     ResultBBox?: list<double>,
     *     DataSource: string,
     *     Language?: string,
     *     FilterCategories?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
