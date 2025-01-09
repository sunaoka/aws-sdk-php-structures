<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePrivateVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $ownerAccount
 * @property Shapes\NewPrivateVirtualInterfaceAllocation $newPrivateVirtualInterfaceAllocation
 */
class AllocatePrivateVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     ownerAccount: string,
     *     newPrivateVirtualInterfaceAllocation: Shapes\NewPrivateVirtualInterfaceAllocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
