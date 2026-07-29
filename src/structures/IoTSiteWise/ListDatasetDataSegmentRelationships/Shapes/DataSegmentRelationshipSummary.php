<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegmentRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetDatasetId
 * @property string $sourceDatasetId
 * @property string $timeSeriesId
 * @property TimeInNanos $startTimestamp
 * @property TimeInNanos $endTimestamp
 */
class DataSegmentRelationshipSummary extends Shape
{
    /**
     * @param array{
     *     targetDatasetId: string,
     *     sourceDatasetId: string,
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
