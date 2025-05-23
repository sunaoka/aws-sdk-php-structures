<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property Shapes\ThingGroupProperties $thingGroupProperties
 * @property int|null $expectedVersion
 */
class UpdateThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     thingGroupProperties: Shapes\ThingGroupProperties,
     *     expectedVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
