<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceDatasetId
 * @property string $timeSeriesId
 * @property TimeInNanos $startTimestamp
 * @property TimeInNanos $endTimestamp
 * @property string $alias
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT'|'VIDEO'|'ANNOTATION'|'JSON' $dataType
 * @property DataSegmentEnrichment|null $enrichment
 */
class DataSegmentSummary extends Shape
{
    /**
     * @param array{
     *     sourceDatasetId: string,
     *     timeSeriesId: string,
     *     startTimestamp: TimeInNanos,
     *     endTimestamp: TimeInNanos,
     *     alias: string,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT'|'VIDEO'|'ANNOTATION'|'JSON',
     *     enrichment?: DataSegmentEnrichment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
