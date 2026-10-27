<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListSourceEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'STANDARD'|'ROUTER_OUTPUT' $SourceType
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
 * @property 'SECRETS_MANAGER'|'AUTOMATIC'|null $EncryptionType
 * @property int $ConnectedDestinationCount
 * @property string|null $AssociatedResourceArn
 */
class ListedSourceEndpoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     SourceType: 'STANDARD'|'ROUTER_OUTPUT',
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
     *     EncryptionType?: 'SECRETS_MANAGER'|'AUTOMATIC'|null,
     *     ConnectedDestinationCount: int,
     *     AssociatedResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
