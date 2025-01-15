<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClassicLinkInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupIdentifier>|null $Groups
 * @property string|null $InstanceId
 * @property list<Tag>|null $Tags
 * @property string|null $VpcId
 */
class ClassicLinkInstance extends Shape
{
    /**
     * @param array{
     *     Groups?: list<GroupIdentifier>|null,
     *     InstanceId?: string|null,
     *     Tags?: list<Tag>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
