<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property Shapes\DisplayContent $displayContent
 * @property array<string, string>|null $tags
 */
class CreateProductPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     displayContent: Shapes\DisplayContent,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
