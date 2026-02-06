<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\StartDeviceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ZWAVE'|'ZIGBEE'|'CLOUD'|'CUSTOM'|'CONTROLLER_CAPABILITY_REDISCOVERY' $DiscoveryType
 * @property array<string, string>|null $CustomProtocolDetail
 * @property string|null $ControllerIdentifier
 * @property string|null $ConnectorAssociationIdentifier
 * @property string|null $AccountAssociationId
 * @property string|null $AuthenticationMaterial
 * @property 'ZWAVE_INSTALL_CODE'|null $AuthenticationMaterialType
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 * @property list<string>|null $ConnectorDeviceIdList
 * @property 'ZWAVE'|'ZIGBEE'|'CUSTOM'|null $Protocol
 * @property string|null $EndDeviceIdentifier
 */
class StartDeviceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryType: 'ZWAVE'|'ZIGBEE'|'CLOUD'|'CUSTOM'|'CONTROLLER_CAPABILITY_REDISCOVERY',
     *     CustomProtocolDetail?: array<string, string>|null,
     *     ControllerIdentifier?: string|null,
     *     ConnectorAssociationIdentifier?: string|null,
     *     AccountAssociationId?: string|null,
     *     AuthenticationMaterial?: string|null,
     *     AuthenticationMaterialType?: 'ZWAVE_INSTALL_CODE'|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null,
     *     ConnectorDeviceIdList?: list<string>|null,
     *     Protocol?: 'ZWAVE'|'ZIGBEE'|'CUSTOM'|null,
     *     EndDeviceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
