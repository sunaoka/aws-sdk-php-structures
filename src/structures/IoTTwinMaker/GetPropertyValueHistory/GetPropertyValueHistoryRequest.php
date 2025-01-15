<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $entityId
 * @property string|null $componentName
 * @property string|null $componentPath
 * @property string|null $componentTypeId
 * @property list<string> $selectedProperties
 * @property list<Shapes\PropertyFilter>|null $propertyFilters
 * @property \Aws\Api\DateTimeResult|null $startDateTime
 * @property \Aws\Api\DateTimeResult|null $endDateTime
 * @property Shapes\InterpolationParameters|null $interpolation
 * @property string|null $nextToken
 * @property int<0, 200>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $orderByTime
 * @property string|null $startTime
 * @property string|null $endTime
 */
class GetPropertyValueHistoryRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId?: string|null,
     *     componentName?: string|null,
     *     componentPath?: string|null,
     *     componentTypeId?: string|null,
     *     selectedProperties: list<string>,
     *     propertyFilters?: list<Shapes\PropertyFilter>|null,
     *     startDateTime?: \Aws\Api\DateTimeResult|null,
     *     endDateTime?: \Aws\Api\DateTimeResult|null,
     *     interpolation?: Shapes\InterpolationParameters|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 200>|null,
     *     orderByTime?: 'ASCENDING'|'DESCENDING'|null,
     *     startTime?: string|null,
     *     endTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
