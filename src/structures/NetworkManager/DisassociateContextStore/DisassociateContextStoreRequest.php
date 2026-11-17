<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 * @property string $TransitGatewayArn
 */
class DisassociateContextStoreRequest extends Request
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     TransitGatewayArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
