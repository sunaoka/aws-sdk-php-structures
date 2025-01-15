<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListTimeSeries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $alias
 * @property string $timeSeriesId
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $dataTypeSpec
 * @property \Aws\Api\DateTimeResult $timeSeriesCreationDate
 * @property \Aws\Api\DateTimeResult $timeSeriesLastUpdateDate
 * @property string $timeSeriesArn
 */
class TimeSeriesSummary extends Shape
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     alias?: string|null,
     *     timeSeriesId: string,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string|null,
     *     timeSeriesCreationDate: \Aws\Api\DateTimeResult,
     *     timeSeriesLastUpdateDate: \Aws\Api\DateTimeResult,
     *     timeSeriesArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
