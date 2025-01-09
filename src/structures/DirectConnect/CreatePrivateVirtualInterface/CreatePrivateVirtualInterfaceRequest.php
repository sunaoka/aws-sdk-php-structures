<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePrivateVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property Shapes\NewPrivateVirtualInterface $newPrivateVirtualInterface
 */
class CreatePrivateVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     newPrivateVirtualInterface: Shapes\NewPrivateVirtualInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
