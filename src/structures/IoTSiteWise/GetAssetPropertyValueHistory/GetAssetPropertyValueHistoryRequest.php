<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValueHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property list<'GOOD'|'BAD'|'UNCERTAIN'>|null $qualities
 * @property 'ASCENDING'|'DESCENDING'|null $timeOrdering
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 */
class GetAssetPropertyValueHistoryRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     qualities?: list<'GOOD'|'BAD'|'UNCERTAIN'>|null,
     *     timeOrdering?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
