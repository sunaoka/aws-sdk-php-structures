<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateMitigationAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $thingGroupNames
 * @property bool $overrideDynamicGroups
 */
class AddThingsToThingGroupParams extends Shape
{
    /**
     * @param array{
     *     thingGroupNames: list<string>,
     *     overrideDynamicGroups?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
