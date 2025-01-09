<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Capabilities
 * @property string $CreationTime
 * @property string $Description
 * @property bool $DisableRollback
 * @property AwsCloudFormationStackDriftInformationDetails $DriftInformation
 * @property bool $EnableTerminationProtection
 * @property string $LastUpdatedTime
 * @property list<string> $NotificationArns
 * @property list<AwsCloudFormationStackOutputsDetails> $Outputs
 * @property string $RoleArn
 * @property string $StackId
 * @property string $StackName
 * @property string $StackStatus
 * @property string $StackStatusReason
 * @property int $TimeoutInMinutes
 */
class AwsCloudFormationStackDetails extends Shape
{
    /**
     * @param array{
     *     Capabilities?: list<string>,
     *     CreationTime?: string,
     *     Description?: string,
     *     DisableRollback?: bool,
     *     DriftInformation?: AwsCloudFormationStackDriftInformationDetails,
     *     EnableTerminationProtection?: bool,
     *     LastUpdatedTime?: string,
     *     NotificationArns?: list<string>,
     *     Outputs?: list<AwsCloudFormationStackOutputsDetails>,
     *     RoleArn?: string,
     *     StackId?: string,
     *     StackName?: string,
     *     StackStatus?: string,
     *     StackStatusReason?: string,
     *     TimeoutInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
