<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization|null $Authorization
 * @property Shapes\EndpointConfigurationRequest|null $EndpointConfiguration
 * @property list<string>|null $IncludedPortalProductArns
 * @property string|null $LogoUri
 * @property Shapes\PortalContent|null $PortalContent
 * @property string $PortalId
 * @property string|null $RumAppMonitorName
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization|null,
     *     EndpointConfiguration?: Shapes\EndpointConfigurationRequest|null,
     *     IncludedPortalProductArns?: list<string>|null,
     *     LogoUri?: string|null,
     *     PortalContent?: Shapes\PortalContent|null,
     *     PortalId: string,
     *     RumAppMonitorName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
