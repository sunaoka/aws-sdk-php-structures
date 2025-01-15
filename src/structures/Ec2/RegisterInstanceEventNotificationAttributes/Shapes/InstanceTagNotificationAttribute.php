<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterInstanceEventNotificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $InstanceTagKeys
 * @property bool|null $IncludeAllTagsOfInstance
 */
class InstanceTagNotificationAttribute extends Shape
{
    /**
     * @param array{
     *     InstanceTagKeys?: list<string>|null,
     *     IncludeAllTagsOfInstance?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
