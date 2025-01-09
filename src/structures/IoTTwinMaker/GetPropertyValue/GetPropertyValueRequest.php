<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 * @property string $componentPath
 * @property string $componentTypeId
 * @property string $entityId
 * @property list<string> $selectedProperties
 * @property string $workspaceId
 * @property int $maxResults
 * @property string $nextToken
 * @property string $propertyGroupName
 * @property Shapes\TabularConditions $tabularConditions
 */
class GetPropertyValueRequest extends Request
{
    /**
     * @param array{
     *     componentName?: string,
     *     componentPath?: string,
     *     componentTypeId?: string,
     *     entityId?: string,
     *     selectedProperties: list<string>,
     *     workspaceId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     propertyGroupName?: string,
     *     tabularConditions?: Shapes\TabularConditions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
