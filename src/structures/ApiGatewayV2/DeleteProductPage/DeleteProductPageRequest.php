<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalProductId
 * @property string $ProductPageId
 */
class DeleteProductPageRequest extends Request
{
    /**
     * @param array{
     *     PortalProductId: string,
     *     ProductPageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
