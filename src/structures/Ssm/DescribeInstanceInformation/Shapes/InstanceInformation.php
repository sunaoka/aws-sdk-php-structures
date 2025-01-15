<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property 'Online'|'ConnectionLost'|'Inactive'|null $PingStatus
 * @property \Aws\Api\DateTimeResult|null $LastPingDateTime
 * @property string|null $AgentVersion
 * @property bool|null $IsLatestVersion
 * @property 'Windows'|'Linux'|'MacOS'|null $PlatformType
 * @property string|null $PlatformName
 * @property string|null $PlatformVersion
 * @property string|null $ActivationId
 * @property string|null $IamRole
 * @property \Aws\Api\DateTimeResult|null $RegistrationDate
 * @property 'ManagedInstance'|'EC2Instance'|null $ResourceType
 * @property string|null $Name
 * @property string|null $IPAddress
 * @property string|null $ComputerName
 * @property string|null $AssociationStatus
 * @property \Aws\Api\DateTimeResult|null $LastAssociationExecutionDate
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulAssociationExecutionDate
 * @property InstanceAggregatedAssociationOverview|null $AssociationOverview
 * @property string|null $SourceId
 * @property 'AWS::EC2::Instance'|'AWS::IoT::Thing'|'AWS::SSM::ManagedInstance'|null $SourceType
 */
class InstanceInformation extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     PingStatus?: 'Online'|'ConnectionLost'|'Inactive'|null,
     *     LastPingDateTime?: \Aws\Api\DateTimeResult|null,
     *     AgentVersion?: string|null,
     *     IsLatestVersion?: bool|null,
     *     PlatformType?: 'Windows'|'Linux'|'MacOS'|null,
     *     PlatformName?: string|null,
     *     PlatformVersion?: string|null,
     *     ActivationId?: string|null,
     *     IamRole?: string|null,
     *     RegistrationDate?: \Aws\Api\DateTimeResult|null,
     *     ResourceType?: 'ManagedInstance'|'EC2Instance'|null,
     *     Name?: string|null,
     *     IPAddress?: string|null,
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
