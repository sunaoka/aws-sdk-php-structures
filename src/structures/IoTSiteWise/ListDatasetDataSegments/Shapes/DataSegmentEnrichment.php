<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENRICHED'|'NOT_ENRICHED' $status
 * @property \Aws\Api\DateTimeResult|null $lastEnrichedAt
 */
class DataSegmentEnrichment extends Shape
{
    /**
     * @param array{
     *     status: 'ENRICHED'|'NOT_ENRICHED',
     *     lastEnrichedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
