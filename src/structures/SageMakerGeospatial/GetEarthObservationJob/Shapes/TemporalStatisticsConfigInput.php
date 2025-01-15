<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'YEARLY'|null $GroupBy
 * @property list<'MEAN'|'MEDIAN'|'STANDARD_DEVIATION'> $Statistics
 * @property list<string>|null $TargetBands
 */
class TemporalStatisticsConfigInput extends Shape
{
    /**
     * @param array{
     *     GroupBy?: 'ALL'|'YEARLY'|null,
     *     Statistics: list<'MEAN'|'MEDIAN'|'STANDARD_DEVIATION'>,
     *     TargetBands?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
