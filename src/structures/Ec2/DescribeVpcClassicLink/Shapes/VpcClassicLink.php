<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ClassicLinkEnabled
 * @property list<Tag> $Tags
 * @property string $VpcId
 */
class VpcClassicLink extends Shape
{
    /**
     * @param array{
     *     ClassicLinkEnabled?: bool,
     *     Tags?: list<Tag>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
