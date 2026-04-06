<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $BoundingBox
 * @property list<string>|null $IncludeCountries
 * @property list<string>|null $IncludeCategories
 * @property list<string>|null $ExcludeCategories
 * @property list<string>|null $IncludeBusinessChains
 * @property list<string>|null $ExcludeBusinessChains
 * @property list<string>|null $IncludeFoodTypes
 * @property list<string>|null $ExcludeFoodTypes
 */
class SearchNearbyFilter extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: list<double>|null,
     *     IncludeCountries?: list<string>|null,
     *     IncludeCategories?: list<string>|null,
     *     ExcludeCategories?: list<string>|null,
     *     IncludeBusinessChains?: list<string>|null,
     *     ExcludeBusinessChains?: list<string>|null,
     *     IncludeFoodTypes?: list<string>|null,
     *     ExcludeFoodTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
