<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmPublicVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 */
class ConfirmPublicVirtualInterfaceRequest extends Request
{
    /**
     * @param array{virtualInterfaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
