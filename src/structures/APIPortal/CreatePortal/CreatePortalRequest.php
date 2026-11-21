<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PortalContent $portalContent
 * @property Shapes\EndpointConfigurationRequest $endpointConfiguration
 * @property Shapes\Authorization $authorization
 * @property list<string>|null $includedProductArns
 * @property string|null $logoUri
 * @property string|null $rumAppMonitorName
 * @property array<string, string>|null $tags
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalContent: Shapes\PortalContent,
     *     endpointConfiguration: Shapes\EndpointConfigurationRequest,
     *     authorization: Shapes\Authorization,
     *     includedProductArns?: list<string>|null,
     *     logoUri?: string|null,
     *     rumAppMonitorName?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
