<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLinkDnsSupport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ClassicLinkDnsSupported
 * @property string|null $VpcId
 */
class ClassicLinkDnsSupport extends Shape
{
    /**
     * @param array{
     *     ClassicLinkDnsSupported?: bool|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
