<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string $componentName
 * @property string $componentPath
 * @property string $componentTypeId
 * @property list<string> $selectedProperties
 * @property list<Shapes\PropertyFilter> $propertyFilters
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property Shapes\InterpolationParameters $interpolation
 * @property string $nextToken
 * @property int<0, 200> $maxResults
 * @property 'ASCENDING'|'DESCENDING' $orderByTime
 * @property string $startTime
 * @property string $endTime
 */
class GetPropertyValueHistoryRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId?: string,
     *     componentName?: string,
     *     componentPath?: string,
     *     componentTypeId?: string,
     *     selectedProperties: list<string>,
     *     propertyFilters?: list<Shapes\PropertyFilter>,
     *     startDateTime?: \Aws\Api\DateTimeResult,
     *     endDateTime?: \Aws\Api\DateTimeResult,
     *     interpolation?: Shapes\InterpolationParameters,
     *     nextToken?: string,
     *     maxResults?: int<0, 200>,
     *     orderByTime?: 'ASCENDING'|'DESCENDING',
     *     startTime?: string,
     *     endTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
