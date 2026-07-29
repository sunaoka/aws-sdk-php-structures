<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDatasetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $timeSeriesId
 * @property string|null $propertyAlias
 * @property TrimSettings|null $trimSettings
 * @property FormatSettings|null $formatSettings
 */
class TimeseriesItem extends Shape
{
    /**
     * @param array{
     *     timeSeriesId?: string|null,
     *     propertyAlias?: string|null,
     *     trimSettings?: TrimSettings|null,
     *     formatSettings?: FormatSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
