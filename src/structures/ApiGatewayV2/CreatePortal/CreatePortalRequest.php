<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization $Authorization
 * @property Shapes\EndpointConfigurationRequest $EndpointConfiguration
 * @property list<string>|null $IncludedPortalProductArns
 * @property string|null $LogoUri
 * @property Shapes\PortalContent $PortalContent
 * @property string|null $RumAppMonitorName
 * @property array<string, string>|null $Tags
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     Authorization: Shapes\Authorization,
     *     EndpointConfiguration: Shapes\EndpointConfigurationRequest,
     *     IncludedPortalProductArns?: list<string>|null,
     *     LogoUri?: string|null,
     *     PortalContent: Shapes\PortalContent,
     *     RumAppMonitorName?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
