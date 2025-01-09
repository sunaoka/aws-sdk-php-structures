<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'> $qualities
 * @property 'ASCENDING'|'DESCENDING' $timeOrdering
 */
class BatchGetAssetPropertyValueHistoryEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     startDate?: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
