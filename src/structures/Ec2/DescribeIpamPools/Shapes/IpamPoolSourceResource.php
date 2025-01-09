<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property 'vpc' $ResourceType
 * @property string $ResourceRegion
 * @property string $ResourceOwner
 */
class IpamPoolSourceResource extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     ResourceType?: 'vpc',
     *     ResourceRegion?: string,
     *     ResourceOwner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
