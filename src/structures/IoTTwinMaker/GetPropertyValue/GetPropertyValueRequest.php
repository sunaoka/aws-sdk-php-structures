<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $componentName
 * @property string|null $componentPath
 * @property string|null $componentTypeId
 * @property string|null $entityId
 * @property list<string> $selectedProperties
 * @property string $workspaceId
 * @property int<0, 200>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $propertyGroupName
 * @property Shapes\TabularConditions|null $tabularConditions
 */
class GetPropertyValueRequest extends Request
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     componentPath?: string|null,
     *     componentTypeId?: string|null,
     *     entityId?: string|null,
     *     selectedProperties: list<string>,
     *     workspaceId: string,
     *     maxResults?: int<0, 200>|null,
     *     nextToken?: string|null,
     *     propertyGroupName?: string|null,
     *     tabularConditions?: Shapes\TabularConditions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
