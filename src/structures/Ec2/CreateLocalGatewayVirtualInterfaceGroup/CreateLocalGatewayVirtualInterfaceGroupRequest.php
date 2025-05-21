<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayVirtualInterfaceGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayId
 * @property int|null $LocalBgpAsn
 * @property int|null $LocalBgpAsnExtended
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateLocalGatewayVirtualInterfaceGroupRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayId: string,
     *     LocalBgpAsn?: int|null,
     *     LocalBgpAsnExtended?: int|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
