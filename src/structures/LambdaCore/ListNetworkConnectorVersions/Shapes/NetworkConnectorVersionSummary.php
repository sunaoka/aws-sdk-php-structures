<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListNetworkConnectorVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $VersionArn
 * @property string $Name
 * @property string $Id
 * @property int<1, max> $Version
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED' $State
 * @property string|null $StateReason
 * @property 'DisallowedByVpcEncryptionControl'|'Ec2RequestLimitExceeded'|'InsufficientRolePermissions'|'InternalError'|'InvalidSecurityGroup'|'InvalidSubnet'|'SecurityGroupsPerInterfaceLimitExceeded'|'SubnetOutOfIPAddresses'|null $StateReasonCode
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class NetworkConnectorVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     VersionArn: string,
     *     Name: string,
     *     Id: string,
     *     Version: int<1, max>,
     *     State: 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED',
     *     StateReason?: string|null,
     *     StateReasonCode?: 'DisallowedByVpcEncryptionControl'|'Ec2RequestLimitExceeded'|'InsufficientRolePermissions'|'InternalError'|'InvalidSecurityGroup'|'InvalidSubnet'|'SecurityGroupsPerInterfaceLimitExceeded'|'SubnetOutOfIPAddresses'|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
