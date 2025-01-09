<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClassicLinkInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupIdentifier> $Groups
 * @property string $InstanceId
 * @property list<Tag> $Tags
 * @property string $VpcId
 */
class ClassicLinkInstance extends Shape
{
    /**
     * @param array{
     *     Groups?: list<GroupIdentifier>,
     *     InstanceId?: string,
     *     Tags?: list<Tag>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
