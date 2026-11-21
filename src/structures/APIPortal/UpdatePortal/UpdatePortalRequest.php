<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property Shapes\PortalContent|null $portalContent
 * @property Shapes\EndpointConfigurationRequest|null $endpointConfiguration
 * @property Shapes\Authorization|null $authorization
 * @property string|null $rumAppMonitorName
 * @property list<string>|null $includedProductArns
 * @property string|null $logoUri
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     portalContent?: Shapes\PortalContent|null,
     *     endpointConfiguration?: Shapes\EndpointConfigurationRequest|null,
     *     authorization?: Shapes\Authorization|null,
     *     rumAppMonitorName?: string|null,
     *     includedProductArns?: list<string>|null,
     *     logoUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
