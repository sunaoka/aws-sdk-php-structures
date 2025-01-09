<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateTransitVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $ownerAccount
 * @property Shapes\NewTransitVirtualInterfaceAllocation $newTransitVirtualInterfaceAllocation
 */
class AllocateTransitVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     ownerAccount: string,
     *     newTransitVirtualInterfaceAllocation: Shapes\NewTransitVirtualInterfaceAllocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
