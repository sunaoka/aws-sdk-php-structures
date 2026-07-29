<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDisassociateDataSegmentsFromDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceDatasetId
 * @property string $timeSeriesId
 * @property TimeInNanos $startTimestamp
 * @property TimeInNanos $endTimestamp
 * @property 'INTERNAL_FAILURE'|'VALIDATION_ERROR'|'RESOURCE_NOT_FOUND'|'LIMIT_EXCEEDED'|'CONFLICTING_OPERATION' $errorCode
 * @property string $errorMessage
 */
class FailedDataSegmentDisassociation extends Shape
{
    /**
     * @param array{
     *     sourceDatasetId: string,
     *     timeSeriesId: string,
     *     startTimestamp: TimeInNanos,
     *     endTimestamp: TimeInNanos,
     *     errorCode: 'INTERNAL_FAILURE'|'VALIDATION_ERROR'|'RESOURCE_NOT_FOUND'|'LIMIT_EXCEEDED'|'CONFLICTING_OPERATION',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
