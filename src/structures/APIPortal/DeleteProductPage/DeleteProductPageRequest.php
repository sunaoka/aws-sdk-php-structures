<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $productPageId
 */
class DeleteProductPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     productPageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
