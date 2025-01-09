<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePublicVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $ownerAccount
 * @property Shapes\NewPublicVirtualInterfaceAllocation $newPublicVirtualInterfaceAllocation
 */
class AllocatePublicVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     ownerAccount: string,
     *     newPublicVirtualInterfaceAllocation: Shapes\NewPublicVirtualInterfaceAllocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
