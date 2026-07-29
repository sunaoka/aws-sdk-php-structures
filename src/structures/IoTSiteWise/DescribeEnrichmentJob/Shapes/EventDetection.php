<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetId
 * @property string|null $timeSeriesId
 * @property string|null $propertyAlias
 * @property EnrichmentTrimSettings $trimSettings
 */
class EventDetection extends Shape
{
    /**
     * @param array{
     *     datasetId: string,
     *     timeSeriesId?: string|null,
     *     propertyAlias?: string|null,
     *     trimSettings: EnrichmentTrimSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
