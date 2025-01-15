<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDynamicThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property Shapes\ThingGroupProperties $thingGroupProperties
 * @property int|null $expectedVersion
 * @property string|null $indexName
 * @property string|null $queryString
 * @property string|null $queryVersion
 */
class UpdateDynamicThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     thingGroupProperties: Shapes\ThingGroupProperties,
     *     expectedVersion?: int|null,
     *     indexName?: string|null,
     *     queryString?: string|null,
     *     queryVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
