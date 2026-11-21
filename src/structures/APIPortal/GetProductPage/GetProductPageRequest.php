<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $productPageId
 * @property string|null $resourceOwnerAccountId
 */
class GetProductPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     productPageId: string,
     *     resourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
