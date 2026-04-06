<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateProductRestEndpointPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EndpointDisplayContent|null $DisplayContent
 * @property string $PortalProductId
 * @property Shapes\RestEndpointIdentifier $RestEndpointIdentifier
 * @property 'ENABLED'|'DISABLED'|null $TryItState
 */
class CreateProductRestEndpointPageRequest extends Request
{
    /**
     * @param array{
     *     DisplayContent?: Shapes\EndpointDisplayContent|null,
     *     PortalProductId: string,
     *     RestEndpointIdentifier: Shapes\RestEndpointIdentifier,
     *     TryItState?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
