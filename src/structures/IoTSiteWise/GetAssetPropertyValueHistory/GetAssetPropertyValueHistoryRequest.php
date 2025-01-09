<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValueHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'> $qualities
 * @property 'ASCENDING'|'DESCENDING' $timeOrdering
 * @property string $nextToken
 * @property int<1, max> $maxResults
 */
class GetAssetPropertyValueHistoryRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     startDate?: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string,
     *     maxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
