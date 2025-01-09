<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property list<string> $LocalGatewayVirtualInterfaceIds
 * @property string $LocalGatewayId
 * @property string $OwnerId
 * @property list<Tag> $Tags
 */
class LocalGatewayVirtualInterfaceGroup extends Shape
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceGroupId?: string,
     *     LocalGatewayVirtualInterfaceIds?: list<string>,
     *     LocalGatewayId?: string,
     *     OwnerId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
