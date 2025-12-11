<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DisplayContent|null $DisplayContent
 * @property string $PortalProductId
 * @property string $ProductPageId
 */
class UpdateProductPageRequest extends Request
{
    /**
     * @param array{
     *     DisplayContent?: Shapes\DisplayContent|null,
     *     PortalProductId: string,
     *     ProductPageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
