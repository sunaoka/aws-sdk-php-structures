<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parentGroupName
 * @property list<GroupNameAndArn> $rootToParentThingGroups
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class ThingGroupMetadata extends Shape
{
    /**
     * @param array{
     *     parentGroupName?: string,
     *     rootToParentThingGroups?: list<GroupNameAndArn>,
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
