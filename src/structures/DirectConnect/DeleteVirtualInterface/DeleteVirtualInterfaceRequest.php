<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 */
class DeleteVirtualInterfaceRequest extends Request
{
    /**
     * @param array{virtualInterfaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
