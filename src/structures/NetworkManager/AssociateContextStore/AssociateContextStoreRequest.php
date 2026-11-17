<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 * @property string|null $TransitGatewayArn
 */
class AssociateContextStoreRequest extends Request
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     TransitGatewayArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
