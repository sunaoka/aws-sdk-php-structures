<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $SourcePlaceId
 * @property list<Category>|null $SourceCategories
 */
class CrossReference extends Shape
{
    /**
     * @param array{
     *     Source: string,
     *     SourcePlaceId: string,
     *     SourceCategories?: list<Category>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
