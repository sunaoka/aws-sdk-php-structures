<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property list<'AVERAGE'|'COUNT'|'MAXIMUM'|'MINIMUM'|'SUM'|'STANDARD_DEVIATION'> $aggregateTypes
 * @property string $resolution
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'> $qualities
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 * @property 'ASCENDING'|'DESCENDING' $timeOrdering
 * @property string $nextToken
 * @property int $maxResults
 */
class GetAssetPropertyAggregatesRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     aggregateTypes: list<'AVERAGE'|'COUNT'|'MAXIMUM'|'MINIMUM'|'SUM'|'STANDARD_DEVIATION'>,
     *     resolution: string,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
