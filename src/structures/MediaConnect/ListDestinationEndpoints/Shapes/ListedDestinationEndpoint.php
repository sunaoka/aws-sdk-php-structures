<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListDestinationEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'STANDARD'|'ROUTER_INPUT' $DestinationType
 * @property string $RegionName
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'MANAGED'|'UNMANAGED' $LifecycleManagement
 * @property int $MessageCount
 * @property 'OWNED'|'CONSUMED' $ResourceShareOwnership
 * @property 'SHARED'|'UNSHARED' $ResourceShareState
 * @property 'REGISTERED'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED' $RegistrationState
 * @property 'CONNECTED'|'DISCONNECTED'|'CONNECTING'|'DISCONNECTING' $ConnectionState
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $DecryptionType
 * @property string|null $ConnectedSource
 * @property string|null $AssociatedResourceArn
 */
class ListedDestinationEndpoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     DestinationType: 'STANDARD'|'ROUTER_INPUT',
     *     RegionName: string,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     LifecycleManagement: 'MANAGED'|'UNMANAGED',
     *     MessageCount: int,
     *     ResourceShareOwnership: 'OWNED'|'CONSUMED',
     *     ResourceShareState: 'SHARED'|'UNSHARED',
     *     RegistrationState: 'REGISTERED'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED',
     *     ConnectionState: 'CONNECTED'|'DISCONNECTED'|'CONNECTING'|'DISCONNECTING',
     *     DecryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     ConnectedSource?: string|null,
     *     AssociatedResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
