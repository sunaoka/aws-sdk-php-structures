<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $InstanceRole
 * @property string|null $KeyName
 * @property string|null $InstanceState
 * @property string|null $Architecture
 * @property string|null $IPAddress
 * @property \Aws\Api\DateTimeResult|null $LaunchTime
 * @property 'Online'|'ConnectionLost'|'Inactive'|null $PingStatus
 * @property \Aws\Api\DateTimeResult|null $LastPingDateTime
 * @property string|null $AgentVersion
 * @property 'Windows'|'Linux'|'MacOS'|null $PlatformType
 * @property string|null $PlatformName
 * @property string|null $PlatformVersion
 * @property string|null $ActivationId
 * @property string|null $IamRole
 * @property \Aws\Api\DateTimeResult|null $RegistrationDate
 * @property string|null $ResourceType
 * @property string|null $ComputerName
 * @property string|null $AssociationStatus
 * @property \Aws\Api\DateTimeResult|null $LastAssociationExecutionDate
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulAssociationExecutionDate
 * @property InstanceAggregatedAssociationOverview|null $AssociationOverview
 * @property string|null $SourceId
 * @property 'AWS::EC2::Instance'|'AWS::IoT::Thing'|'AWS::SSM::ManagedInstance'|null $SourceType
 */
class InstanceProperty extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     InstanceRole?: string|null,
     *     KeyName?: string|null,
     *     InstanceState?: string|null,
     *     Architecture?: string|null,
     *     IPAddress?: string|null,
     *     LaunchTime?: \Aws\Api\DateTimeResult|null,
     *     PingStatus?: 'Online'|'ConnectionLost'|'Inactive'|null,
     *     LastPingDateTime?: \Aws\Api\DateTimeResult|null,
     *     AgentVersion?: string|null,
     *     PlatformType?: 'Windows'|'Linux'|'MacOS'|null,
     *     PlatformName?: string|null,
     *     PlatformVersion?: string|null,
     *     ActivationId?: string|null,
     *     IamRole?: string|null,
     *     RegistrationDate?: \Aws\Api\DateTimeResult|null,
     *     ResourceType?: string|null,
     *     ComputerName?: string|null,
     *     AssociationStatus?: string|null,
     *     LastAssociationExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulAssociationExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     AssociationOverview?: InstanceAggregatedAssociationOverview|null,
     *     SourceId?: string|null,
     *     SourceType?: 'AWS::EC2::Instance'|'AWS::IoT::Thing'|'AWS::SSM::ManagedInstance'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
