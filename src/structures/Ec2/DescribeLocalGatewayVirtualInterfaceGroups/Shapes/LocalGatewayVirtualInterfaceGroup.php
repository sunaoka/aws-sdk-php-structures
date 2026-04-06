<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayVirtualInterfaceGroupId
 * @property list<string>|null $LocalGatewayVirtualInterfaceIds
 * @property string|null $LocalGatewayId
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 */
class LocalGatewayVirtualInterfaceGroup extends Shape
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceGroupId?: string|null,
     *     LocalGatewayVirtualInterfaceIds?: list<string>|null,
     *     LocalGatewayId?: string|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
