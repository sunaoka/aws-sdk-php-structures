<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property 'Online'|'ConnectionLost'|'Inactive' $PingStatus
 * @property \Aws\Api\DateTimeResult $LastPingDateTime
 * @property string $AgentVersion
 * @property bool $IsLatestVersion
 * @property 'Windows'|'Linux'|'MacOS' $PlatformType
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property string $ActivationId
 * @property string $IamRole
 * @property \Aws\Api\DateTimeResult $RegistrationDate
 * @property 'ManagedInstance'|'EC2Instance' $ResourceType
 * @property string $Name
 * @property string $IPAddress
 * @property string $ComputerName
 * @property string $AssociationStatus
 * @property \Aws\Api\DateTimeResult $LastAssociationExecutionDate
 * @property \Aws\Api\DateTimeResult $LastSuccessfulAssociationExecutionDate
 * @property InstanceAggregatedAssociationOverview $AssociationOverview
 * @property string $SourceId
 * @property 'AWS::EC2::Instance'|'AWS::IoT::Thing'|'AWS::SSM::ManagedInstance' $SourceType
 */
class InstanceInformation extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     PingStatus?: 'Online'|'ConnectionLost'|'Inactive',
     *     LastPingDateTime?: \Aws\Api\DateTimeResult,
     *     AgentVersion?: string,
     *     IsLatestVersion?: bool,
     *     PlatformType?: 'Windows'|'Linux'|'MacOS',
     *     PlatformName?: string,
     *     PlatformVersion?: string,
     *     ActivationId?: string,
     *     IamRole?: string,
     *     RegistrationDate?: \Aws\Api\DateTimeResult,
     *     ResourceType?: 'ManagedInstance'|'EC2Instance',
     *     Name?: string,
     *     IPAddress?: string,
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
