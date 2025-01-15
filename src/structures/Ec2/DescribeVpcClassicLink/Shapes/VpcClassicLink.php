<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ClassicLinkEnabled
 * @property list<Tag>|null $Tags
 * @property string|null $VpcId
 */
class VpcClassicLink extends Shape
{
    /**
     * @param array{
     *     ClassicLinkEnabled?: bool|null,
     *     Tags?: list<Tag>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
