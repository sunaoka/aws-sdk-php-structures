<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingGroupsForThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property list<string> $thingGroupsToAdd
 * @property list<string> $thingGroupsToRemove
 * @property bool $overrideDynamicGroups
 */
class UpdateThingGroupsForThingRequest extends Request
{
    /**
     * @param array{
     *     thingName?: string,
     *     thingGroupsToAdd?: list<string>,
     *     thingGroupsToRemove?: list<string>,
     *     overrideDynamicGroups?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
