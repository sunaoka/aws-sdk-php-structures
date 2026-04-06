<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortalProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalProductId
 * @property string|null $ResourceOwnerAccountId
 */
class GetPortalProductRequest extends Request
{
    /**
     * @param array{
     *     PortalProductId: string,
     *     ResourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
