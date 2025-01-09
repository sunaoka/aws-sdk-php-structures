<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $BoundingBox
 * @property list<string> $IncludeCountries
 * @property list<string> $IncludeCategories
 * @property list<string> $ExcludeCategories
 * @property list<string> $IncludeBusinessChains
 * @property list<string> $ExcludeBusinessChains
 * @property list<string> $IncludeFoodTypes
 * @property list<string> $ExcludeFoodTypes
 */
class SearchNearbyFilter extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>,
     *     IncludeCountries?: list<string>,
     *     IncludeCategories?: list<string>,
     *     ExcludeCategories?: list<string>,
     *     IncludeBusinessChains?: list<string>,
     *     ExcludeBusinessChains?: list<string>,
     *     IncludeFoodTypes?: list<string>,
     *     ExcludeFoodTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
