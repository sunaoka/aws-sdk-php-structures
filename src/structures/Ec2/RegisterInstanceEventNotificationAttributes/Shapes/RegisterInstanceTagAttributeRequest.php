<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterInstanceEventNotificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IncludeAllTagsOfInstance
 * @property list<string>|null $InstanceTagKeys
 */
class RegisterInstanceTagAttributeRequest extends Shape
{
    /**
     * @param array{
     *     IncludeAllTagsOfInstance?: bool|null,
     *     InstanceTagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
