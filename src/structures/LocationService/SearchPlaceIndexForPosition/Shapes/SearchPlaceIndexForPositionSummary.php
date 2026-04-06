<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSource
 * @property string|null $Language
 * @property int<1, 50>|null $MaxResults
 * @property list<double> $Position
 */
class SearchPlaceIndexForPositionSummary extends Shape
{
    /**
     * @param array{
     *     DataSource: string,
     *     Language?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
