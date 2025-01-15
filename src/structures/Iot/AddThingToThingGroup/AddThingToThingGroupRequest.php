<?php

namespace Sunaoka\Aws\Structures\Iot\AddThingToThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $thingGroupName
 * @property string|null $thingGroupArn
 * @property string|null $thingName
 * @property string|null $thingArn
 * @property bool|null $overrideDynamicGroups
 */
class AddThingToThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName?: string|null,
     *     thingGroupArn?: string|null,
     *     thingName?: string|null,
     *     thingArn?: string|null,
     *     overrideDynamicGroups?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
