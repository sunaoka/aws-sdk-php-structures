<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property string $PrivateLinkEndpoint
 * @property list<string> $SubnetArns
 * @property list<string> $SecurityGroupArns
 */
class PrivateLinkConfig extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     PrivateLinkEndpoint?: string,
     *     SubnetArns?: list<string>,
     *     SecurityGroupArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
