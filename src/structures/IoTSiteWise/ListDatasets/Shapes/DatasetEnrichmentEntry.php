<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULLY_ENRICHED'|'PARTIALLY_ENRICHED'|'NOT_ENRICHED' $status
 * @property \Aws\Api\DateTimeResult|null $lastEnrichedAt
 */
class DatasetEnrichmentEntry extends Shape
{
    /**
     * @param array{
     *     status: 'FULLY_ENRICHED'|'PARTIALLY_ENRICHED'|'NOT_ENRICHED',
     *     lastEnrichedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
