<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property string|null $PrivateLinkEndpoint
 * @property list<string>|null $SubnetArns
 * @property list<string>|null $SecurityGroupArns
 */
class PrivateLinkConfig extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     PrivateLinkEndpoint?: string|null,
     *     SubnetArns?: list<string>|null,
     *     SecurityGroupArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
