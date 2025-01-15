<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 * @property list<'AVERAGE'|'COUNT'|'MAXIMUM'|'MINIMUM'|'SUM'|'STANDARD_DEVIATION'> $aggregateTypes
 * @property string $resolution
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'>|null $qualities
 * @property 'ASCENDING'|'DESCENDING'|null $timeOrdering
 */
class BatchGetAssetPropertyAggregatesEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null,
     *     aggregateTypes: list<'AVERAGE'|'COUNT'|'MAXIMUM'|'MINIMUM'|'SUM'|'STANDARD_DEVIATION'>,
     *     resolution: string,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>|null,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
