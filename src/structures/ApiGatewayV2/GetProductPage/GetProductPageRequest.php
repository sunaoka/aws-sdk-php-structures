<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetProductPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalProductId
 * @property string $ProductPageId
 * @property string|null $ResourceOwnerAccountId
 */
class GetProductPageRequest extends Request
{
    /**
     * @param array{
     *     PortalProductId: string,
     *     ProductPageId: string,
     *     ResourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
