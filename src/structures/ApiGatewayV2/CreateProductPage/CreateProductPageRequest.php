<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DisplayContent $DisplayContent
 * @property string $PortalProductId
 */
class CreateProductPageRequest extends Request
{
    /**
     * @param array{
     *     DisplayContent: Shapes\DisplayContent,
     *     PortalProductId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
