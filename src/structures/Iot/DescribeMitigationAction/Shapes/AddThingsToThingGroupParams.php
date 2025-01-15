<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeMitigationAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $thingGroupNames
 * @property bool|null $overrideDynamicGroups
 */
class AddThingsToThingGroupParams extends Shape
{
    /**
     * @param array{
     *     thingGroupNames: list<string>,
     *     overrideDynamicGroups?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
