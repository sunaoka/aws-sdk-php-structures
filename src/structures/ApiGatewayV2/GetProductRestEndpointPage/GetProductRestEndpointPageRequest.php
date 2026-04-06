<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetProductRestEndpointPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IncludeRawDisplayContent
 * @property string $PortalProductId
 * @property string $ProductRestEndpointPageId
 * @property string|null $ResourceOwnerAccountId
 */
class GetProductRestEndpointPageRequest extends Request
{
    /**
     * @param array{
     *     IncludeRawDisplayContent?: string|null,
     *     PortalProductId: string,
     *     ProductRestEndpointPageId: string,
     *     ResourceOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
