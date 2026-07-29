<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDeleteDatasetDataSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timeSeriesId
 * @property TimeInNanos $startTimestamp
 * @property TimeInNanos $endTimestamp
 */
class DeleteDataSegmentEntry extends Shape
{
    /**
     * @param array{
     *     timeSeriesId: string,
     *     startTimestamp: TimeInNanos,
     *     endTimestamp: TimeInNanos
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
