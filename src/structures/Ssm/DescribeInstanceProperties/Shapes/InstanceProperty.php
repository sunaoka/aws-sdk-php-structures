<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $InstanceRole
 * @property string $KeyName
 * @property string $InstanceState
 * @property string $Architecture
 * @property string $IPAddress
 * @property \Aws\Api\DateTimeResult $LaunchTime
 * @property 'Online'|'ConnectionLost'|'Inactive' $PingStatus
 * @property \Aws\Api\DateTimeResult $LastPingDateTime
 * @property string $AgentVersion
 * @property 'Windows'|'Linux'|'MacOS' $PlatformType
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property string $ActivationId
 * @property string $IamRole
 * @property \Aws\Api\DateTimeResult $RegistrationDate
 * @property string $ResourceType
 * @property string $ComputerName
 * @property string $AssociationStatus
 * @property \Aws\Api\DateTimeResult $LastAssociationExecutionDate
 * @property \Aws\Api\DateTimeResult $LastSuccessfulAssociationExecutionDate
 * @property InstanceAggregatedAssociationOverview $AssociationOverview
 * @property string $SourceId
 * @property 'AWS::EC2::Instance'|'AWS::IoT::Thing'|'AWS::SSM::ManagedInstance' $SourceType
 */
class InstanceProperty extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     InstanceRole?: string,
     *     KeyName?: string,
     *     InstanceState?: string,
     *     Architecture?: string,
     *     IPAddress?: string,
     *     LaunchTime?: \Aws\Api\DateTimeResult,
     *     PingStatus?: 'Online'|'ConnectionLost'|'Inactive',
     *     LastPingDateTime?: \Aws\Api\DateTimeResult,
     *     AgentVersion?: string,
     *     PlatformType?: 'Windows'|'Linux'|'MacOS',
     *     PlatformName?: string,
     *     PlatformVersion?: string,
     *     ActivationId?: string,
     *     IamRole?: string,
     *     RegistrationDate?: \Aws\Api\DateTimeResult,
     *     ResourceType?: string,
     *     ComputerName?: string,
     *     AssociationStatus?: string,
     *     LastAssociationExecutionDate?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulAssociationExecutionDate?: \Aws\Api\DateTimeResult,
     *     AssociationOverview?: InstanceAggregatedAssociationOverview,
     *     SourceId?: string,
     *     SourceType?: 'AWS::EC2::Instance'|'AWS::IoT::Thing'|'AWS::SSM::ManagedInstance'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
