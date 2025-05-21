<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\StartDeviceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ZWAVE'|'ZIGBEE'|'CLOUD' $DiscoveryType
 * @property string|null $ControllerIdentifier
 * @property string|null $ConnectorAssociationIdentifier
 * @property string|null $AuthenticationMaterial
 * @property 'ZWAVE_INSTALL_CODE'|null $AuthenticationMaterialType
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class StartDeviceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryType: 'ZWAVE'|'ZIGBEE'|'CLOUD',
     *     ControllerIdentifier?: string|null,
     *     ConnectorAssociationIdentifier?: string|null,
     *     AuthenticationMaterial?: string|null,
     *     AuthenticationMaterialType?: 'ZWAVE_INSTALL_CODE'|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
