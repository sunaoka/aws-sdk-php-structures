<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetNetworkConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Id
 * @property string|null $VersionArn
 * @property int<1, max>|null $Version
 * @property string|null $LatestVersionArn
 * @property int<1, max>|null $LatestVersion
 * @property Shapes\NetworkConnectorConfiguration|null $Configuration
 * @property string|null $OperatorRole
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property string|null $StateReason
 * @property 'DisallowedByVpcEncryptionControl'|'Ec2RequestLimitExceeded'|'InsufficientRolePermissions'|'InternalError'|'InvalidSecurityGroup'|'InvalidSubnet'|'SecurityGroupsPerInterfaceLimitExceeded'|'SubnetOutOfIPAddresses'|null $StateReasonCode
 * @property 'Successful'|'Failed'|'InProgress'|null $LastUpdateStatus
 * @property string|null $LastUpdateStatusReason
 * @property 'DisallowedByVpcEncryptionControl'|'Ec2RequestLimitExceeded'|'InsufficientRolePermissions'|'InternalError'|'InvalidSecurityGroup'|'InvalidSubnet'|'SecurityGroupsPerInterfaceLimitExceeded'|'SubnetOutOfIPAddresses'|null $LastUpdateStatusReasonCode
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class GetNetworkConnectorResponse extends Response
{
}
