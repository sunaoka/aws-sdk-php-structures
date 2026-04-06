<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupId
 * @property string|null $GroupName
 */
class GroupIdentifier extends Shape
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     GroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
