<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDisassociateDataSegmentsFromDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceDatasetId
 * @property string $timeSeriesId
 * @property TimeInNanos $startTimestamp
 * @property TimeInNanos $endTimestamp
 */
class DisassociateDataSegmentEntry extends Shape
{
    /**
     * @param array{
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
