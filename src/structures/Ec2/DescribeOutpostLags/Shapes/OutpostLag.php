<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeOutpostLags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutpostArn
 * @property string|null $OwnerId
 * @property string|null $State
 * @property string|null $OutpostLagId
 * @property list<string>|null $LocalGatewayVirtualInterfaceIds
 * @property list<string>|null $ServiceLinkVirtualInterfaceIds
 * @property list<Tag>|null $Tags
 */
class OutpostLag extends Shape
{
    /**
     * @param array{
     *     OutpostArn?: string|null,
     *     OwnerId?: string|null,
     *     State?: string|null,
     *     OutpostLagId?: string|null,
     *     LocalGatewayVirtualInterfaceIds?: list<string>|null,
     *     ServiceLinkVirtualInterfaceIds?: list<string>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
