<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayVirtualInterfaceId
 * @property bool|null $DryRun
 */
class DeleteLocalGatewayVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
