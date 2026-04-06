<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string|null $UserId
 * @property 'DEVICE_COMMAND_RESPONSE'|'DEVICE_DISCOVERY'|'DEVICE_EVENT'|'DEVICE_COMMAND_REQUEST' $Operation
 * @property string|null $OperationVersion
 * @property int<100, 550>|null $StatusCode
 * @property string|null $Message
 * @property string|null $DeviceDiscoveryId
 * @property string|null $ConnectorDeviceId
 * @property string|null $TraceId
 * @property list<Shapes\Device>|null $Devices
 * @property Shapes\MatterEndpoint|null $MatterEndpoint
 */
class SendConnectorEventRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     UserId?: string|null,
     *     Operation: 'DEVICE_COMMAND_RESPONSE'|'DEVICE_DISCOVERY'|'DEVICE_EVENT'|'DEVICE_COMMAND_REQUEST',
     *     OperationVersion?: string|null,
     *     StatusCode?: int<100, 550>|null,
     *     Message?: string|null,
     *     DeviceDiscoveryId?: string|null,
     *     ConnectorDeviceId?: string|null,
     *     TraceId?: string|null,
     *     Devices?: list<Shapes\Device>|null,
     *     MatterEndpoint?: Shapes\MatterEndpoint|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
