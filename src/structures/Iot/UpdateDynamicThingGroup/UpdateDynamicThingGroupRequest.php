<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDynamicThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property Shapes\ThingGroupProperties $thingGroupProperties
 * @property int $expectedVersion
 * @property string $indexName
 * @property string $queryString
 * @property string $queryVersion
 */
class UpdateDynamicThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     thingGroupProperties: Shapes\ThingGroupProperties,
     *     expectedVersion?: int,
     *     indexName?: string,
     *     queryString?: string,
     *     queryVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
