<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

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
 * @property list<SourceEndpointMessage> $Messages
 * @property 'STANDARD'|'ROUTER_OUTPUT' $SourceType
 * @property SourceEndpointConfiguration $Configuration
 * @property 'OWNED'|'CONSUMED' $ResourceShareOwnership
 * @property ResourceShareDetails $ResourceShareDetails
 * @property 'REGISTERED'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED' $RegistrationState
 * @property 'CONNECTED'|'DISCONNECTED'|'CONNECTING'|'DISCONNECTING' $ConnectionState
 * @property SourceEndpointConnectionDetails|null $ConnectionDetails
 * @property list<string> $ConnectedDestinations
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $EncryptionType
 * @property EndpointEncryptionConfiguration|null $EncryptionConfiguration
 * @property SourceEndpointAssociatedResourceDetails $AssociatedResourceDetails
 * @property array<string, string> $Tags
 */
class SourceEndpoint extends Shape
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
     *     Messages: list<SourceEndpointMessage>,
     *     SourceType: 'STANDARD'|'ROUTER_OUTPUT',
     *     Configuration: SourceEndpointConfiguration,
     *     ResourceShareOwnership: 'OWNED'|'CONSUMED',
     *     ResourceShareDetails: ResourceShareDetails,
     *     RegistrationState: 'REGISTERED'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED',
     *     ConnectionState: 'CONNECTED'|'DISCONNECTED'|'CONNECTING'|'DISCONNECTING',
     *     ConnectionDetails?: SourceEndpointConnectionDetails|null,
     *     ConnectedDestinations: list<string>,
     *     EncryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     EncryptionConfiguration?: EndpointEncryptionConfiguration|null,
     *     AssociatedResourceDetails: SourceEndpointAssociatedResourceDetails,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
