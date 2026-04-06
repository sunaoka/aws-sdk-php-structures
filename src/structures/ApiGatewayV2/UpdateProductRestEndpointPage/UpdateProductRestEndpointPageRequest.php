<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductRestEndpointPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EndpointDisplayContent|null $DisplayContent
 * @property string $PortalProductId
 * @property string $ProductRestEndpointPageId
 * @property 'ENABLED'|'DISABLED'|null $TryItState
 */
class UpdateProductRestEndpointPageRequest extends Request
{
    /**
     * @param array{
     *     DisplayContent?: Shapes\EndpointDisplayContent|null,
     *     PortalProductId: string,
     *     ProductRestEndpointPageId: string,
     *     TryItState?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
