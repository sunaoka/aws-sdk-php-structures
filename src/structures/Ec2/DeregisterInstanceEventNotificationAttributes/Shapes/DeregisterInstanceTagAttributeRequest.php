<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterInstanceEventNotificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IncludeAllTagsOfInstance
 * @property list<string> $InstanceTagKeys
 */
class DeregisterInstanceTagAttributeRequest extends Shape
{
    /**
     * @param array{
     *     IncludeAllTagsOfInstance?: bool,
     *     InstanceTagKeys?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
