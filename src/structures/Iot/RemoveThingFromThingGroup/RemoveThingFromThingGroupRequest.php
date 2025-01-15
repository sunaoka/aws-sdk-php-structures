<?php

namespace Sunaoka\Aws\Structures\Iot\RemoveThingFromThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $thingGroupName
 * @property string|null $thingGroupArn
 * @property string|null $thingName
 * @property string|null $thingArn
 */
class RemoveThingFromThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName?: string|null,
     *     thingGroupArn?: string|null,
     *     thingName?: string|null,
     *     thingArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
