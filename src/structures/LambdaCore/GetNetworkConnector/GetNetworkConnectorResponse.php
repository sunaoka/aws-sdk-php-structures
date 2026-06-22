<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetNetworkConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 * @property int<0, max>|null $Version
 * @property Shapes\NetworkConnectorConfiguration|null $Configuration
 * @property string|null $OperatorRole
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property string|null $StateReason
 * @property 'DisallowedByVpcEncryptionControl'|'Ec2RequestLimitExceeded'|'InsufficientRolePermissions'|'InternalError'|'InvalidSecurityGroup'|'InvalidSubnet'|'SubnetOutOfIPAddresses'|null $StateReasonCode
 * @property 'Successful'|'Failed'|'InProgress'|null $LastUpdateStatus
 * @property string|null $LastUpdateStatusReason
 * @property 'DisallowedByVpcEncryptionControl'|'Ec2RequestLimitExceeded'|'InsufficientRolePermissions'|'InternalError'|'InvalidSecurityGroup'|'InvalidSubnet'|'SubnetOutOfIPAddresses'|null $LastUpdateStatusReasonCode
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class GetNetworkConnectorResponse extends Response
{
}
