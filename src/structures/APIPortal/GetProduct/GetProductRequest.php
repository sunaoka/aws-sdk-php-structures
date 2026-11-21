<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string|null $resourceOwnerAccountId
 */
class GetProductRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     resourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
