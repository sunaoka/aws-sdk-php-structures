<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateManagedThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CONTROLLER'|'DEVICE' $Role
 * @property string|null $Owner
 * @property string|null $CredentialLockerId
 * @property string $AuthenticationMaterial
 * @property 'CUSTOM_PROTOCOL_QR_BAR_CODE'|'WIFI_SETUP_QR_BAR_CODE'|'ZWAVE_QR_BAR_CODE'|'ZIGBEE_QR_BAR_CODE'|'DISCOVERED_DEVICE' $AuthenticationMaterialType
 * @property string|null $SerialNumber
 * @property string|null $Brand
 * @property string|null $Model
 * @property string|null $Name
 * @property Shapes\CapabilityReport|null $CapabilityReport
 * @property list<Shapes\CapabilitySchemaItem>|null $CapabilitySchemas
 * @property string|null $Capabilities
 * @property string|null $ClientToken
 * @property string|null $Classification
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $MetaData
 */
class CreateManagedThingRequest extends Request
{
    /**
     * @param array{
     *     Role: 'CONTROLLER'|'DEVICE',
     *     Owner?: string|null,
     *     CredentialLockerId?: string|null,
     *     AuthenticationMaterial: string,
     *     AuthenticationMaterialType: 'CUSTOM_PROTOCOL_QR_BAR_CODE'|'WIFI_SETUP_QR_BAR_CODE'|'ZWAVE_QR_BAR_CODE'|'ZIGBEE_QR_BAR_CODE'|'DISCOVERED_DEVICE',
     *     SerialNumber?: string|null,
     *     Brand?: string|null,
     *     Model?: string|null,
     *     Name?: string|null,
     *     CapabilityReport?: Shapes\CapabilityReport|null,
     *     CapabilitySchemas?: list<Shapes\CapabilitySchemaItem>|null,
     *     Capabilities?: string|null,
     *     ClientToken?: string|null,
     *     Classification?: string|null,
     *     Tags?: array<string, string>|null,
     *     MetaData?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
