<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property string $Description
 * @property string $RegionName
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'MANAGED'|'UNMANAGED' $LifecycleManagement
 * @property list<DestinationEndpointMessage> $Messages
 * @property 'STANDARD'|'ROUTER_INPUT' $DestinationType
 * @property DestinationEndpointConfiguration $Configuration
 * @property 'OWNED'|'CONSUMED' $ResourceShareOwnership
 * @property ResourceShareDetails $ResourceShareDetails
 * @property 'REGISTERED'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED' $RegistrationState
 * @property DestinationEndpointConnectionDetails|null $ConnectionDetails
 * @property 'CONNECTED'|'DISCONNECTED'|'CONNECTING'|'DISCONNECTING' $ConnectionState
 * @property string|null $ConnectedSource
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $DecryptionType
 * @property EndpointEncryptionConfiguration|null $DecryptionConfiguration
 * @property DestinationEndpointAssociatedResourceDetails $AssociatedResourceDetails
 * @property array<string, string> $Tags
 */
class DestinationEndpoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     Description: string,
     *     RegionName: string,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     LifecycleManagement: 'MANAGED'|'UNMANAGED',
     *     Messages: list<DestinationEndpointMessage>,
     *     DestinationType: 'STANDARD'|'ROUTER_INPUT',
     *     Configuration: DestinationEndpointConfiguration,
     *     ResourceShareOwnership: 'OWNED'|'CONSUMED',
     *     ResourceShareDetails: ResourceShareDetails,
     *     RegistrationState: 'REGISTERED'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED',
     *     ConnectionDetails?: DestinationEndpointConnectionDetails|null,
     *     ConnectionState: 'CONNECTED'|'DISCONNECTED'|'CONNECTING'|'DISCONNECTING',
     *     ConnectedSource?: string|null,
     *     DecryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     DecryptionConfiguration?: EndpointEncryptionConfiguration|null,
     *     AssociatedResourceDetails: DestinationEndpointAssociatedResourceDetails,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
