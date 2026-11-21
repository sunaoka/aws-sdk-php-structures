<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $productPageId
 * @property Shapes\DisplayContent|null $displayContent
 */
class UpdateProductPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     productPageId: string,
     *     displayContent?: Shapes\DisplayContent|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
