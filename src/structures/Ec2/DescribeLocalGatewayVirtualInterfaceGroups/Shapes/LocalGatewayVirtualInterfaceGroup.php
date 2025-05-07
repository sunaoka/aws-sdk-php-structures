<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayVirtualInterfaceGroupId
 * @property list<string>|null $LocalGatewayVirtualInterfaceIds
 * @property string|null $LocalGatewayId
 * @property string|null $OwnerId
 * @property int|null $LocalBgpAsn
 * @property int|null $LocalBgpAsnExtended
 * @property string|null $LocalGatewayVirtualInterfaceGroupArn
 * @property list<Tag>|null $Tags
 * @property 'pending'|'incomplete'|'available'|'deleting'|'deleted'|null $ConfigurationState
 */
class LocalGatewayVirtualInterfaceGroup extends Shape
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceGroupId?: string|null,
     *     LocalGatewayVirtualInterfaceIds?: list<string>|null,
     *     LocalGatewayId?: string|null,
     *     OwnerId?: string|null,
     *     LocalBgpAsn?: int|null,
     *     LocalBgpAsnExtended?: int|null,
     *     LocalGatewayVirtualInterfaceGroupArn?: string|null,
     *     Tags?: list<Tag>|null,
     *     ConfigurationState?: 'pending'|'incomplete'|'available'|'deleting'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
