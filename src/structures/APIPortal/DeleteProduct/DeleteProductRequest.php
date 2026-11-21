<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 */
class DeleteProductRequest extends Request
{
    /**
     * @param array{productId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
