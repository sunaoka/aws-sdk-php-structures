<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceEventNotificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $InstanceTagKeys
 * @property bool $IncludeAllTagsOfInstance
 */
class InstanceTagNotificationAttribute extends Shape
{
    /**
     * @param array{
     *     InstanceTagKeys?: list<string>,
     *     IncludeAllTagsOfInstance?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
