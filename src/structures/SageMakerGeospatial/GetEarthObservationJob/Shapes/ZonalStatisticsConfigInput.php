<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'MEAN'|'MEDIAN'|'STANDARD_DEVIATION'|'MAX'|'MIN'|'SUM'> $Statistics
 * @property list<string>|null $TargetBands
 * @property string $ZoneS3Path
 * @property string|null $ZoneS3PathKmsKeyId
 */
class ZonalStatisticsConfigInput extends Shape
{
    /**
     * @param array{
     *     Statistics: list<'MEAN'|'MEDIAN'|'STANDARD_DEVIATION'|'MAX'|'MIN'|'SUM'>,
     *     TargetBands?: list<string>|null,
     *     ZoneS3Path: string,
     *     ZoneS3PathKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
