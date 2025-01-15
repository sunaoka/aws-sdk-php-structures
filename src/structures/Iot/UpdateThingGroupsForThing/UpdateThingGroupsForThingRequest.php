<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingGroupsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $thingName
 * @property list<string>|null $thingGroupsToAdd
 * @property list<string>|null $thingGroupsToRemove
 * @property bool|null $overrideDynamicGroups
 */
class UpdateThingGroupsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName?: string|null,
     *     thingGroupsToAdd?: list<string>|null,
     *     thingGroupsToRemove?: list<string>|null,
     *     overrideDynamicGroups?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
