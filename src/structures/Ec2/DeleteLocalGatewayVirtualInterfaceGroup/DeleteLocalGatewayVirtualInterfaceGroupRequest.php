<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayVirtualInterfaceGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayVirtualInterfaceGroupId
 * @property bool|null $DryRun
 */
class DeleteLocalGatewayVirtualInterfaceGroupRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceGroupId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
