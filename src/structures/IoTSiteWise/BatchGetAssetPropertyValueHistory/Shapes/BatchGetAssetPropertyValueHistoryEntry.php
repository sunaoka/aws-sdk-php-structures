<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'>|null $qualities
 * @property 'ASCENDING'|'DESCENDING'|null $timeOrdering
 */
class BatchGetAssetPropertyValueHistoryEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>|null,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
