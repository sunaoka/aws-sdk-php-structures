<?php

namespace Sunaoka\Aws\Structures\Iot\RemoveThingFromThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property string $thingGroupArn
 * @property string $thingName
 * @property string $thingArn
 */
class RemoveThingFromThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName?: string,
     *     thingGroupArn?: string,
     *     thingName?: string,
     *     thingArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
