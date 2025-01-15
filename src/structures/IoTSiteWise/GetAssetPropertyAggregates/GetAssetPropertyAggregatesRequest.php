<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyAggregates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 * @property list<'AVERAGE'|'COUNT'|'MAXIMUM'|'MINIMUM'|'SUM'|'STANDARD_DEVIATION'> $aggregateTypes
 * @property string $resolution
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'>|null $qualities
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 * @property 'ASCENDING'|'DESCENDING'|null $timeOrdering
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 */
class GetAssetPropertyAggregatesRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null,
     *     aggregateTypes: list<'AVERAGE'|'COUNT'|'MAXIMUM'|'MINIMUM'|'SUM'|'STANDARD_DEVIATION'>,
     *     resolution: string,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>|null,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
