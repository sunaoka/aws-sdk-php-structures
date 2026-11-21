<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProductApiPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $productApiPageId
 */
class DeleteProductApiPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     productApiPageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
