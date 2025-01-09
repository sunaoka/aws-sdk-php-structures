<?php

namespace Sunaoka\Aws\Structures\Iot\AddThingToThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property string $thingGroupArn
 * @property string $thingName
 * @property string $thingArn
 * @property bool $overrideDynamicGroups
 */
class AddThingToThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName?: string,
     *     thingGroupArn?: string,
     *     thingName?: string,
     *     thingArn?: string,
     *     overrideDynamicGroups?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
