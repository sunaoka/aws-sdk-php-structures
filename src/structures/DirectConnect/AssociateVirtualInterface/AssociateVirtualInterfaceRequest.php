<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property string $connectionId
 */
class AssociateVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     connectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
