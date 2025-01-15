<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $parentGroupName
 * @property list<GroupNameAndArn>|null $rootToParentThingGroups
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class ThingGroupMetadata extends Shape
{
    /**
     * @param array{
     *     parentGroupName?: string|null,
     *     rootToParentThingGroups?: list<GroupNameAndArn>|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
