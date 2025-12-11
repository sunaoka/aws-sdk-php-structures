<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteProductRestEndpointPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalProductId
 * @property string $ProductRestEndpointPageId
 */
class DeleteProductRestEndpointPageRequest extends Request
{
    /**
     * @param array{
     *     PortalProductId: string,
     *     ProductRestEndpointPageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
