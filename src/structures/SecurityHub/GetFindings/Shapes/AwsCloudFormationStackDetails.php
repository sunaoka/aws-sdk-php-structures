<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Capabilities
 * @property string|null $CreationTime
 * @property string|null $Description
 * @property bool|null $DisableRollback
 * @property AwsCloudFormationStackDriftInformationDetails|null $DriftInformation
 * @property bool|null $EnableTerminationProtection
 * @property string|null $LastUpdatedTime
 * @property list<string>|null $NotificationArns
 * @property list<AwsCloudFormationStackOutputsDetails>|null $Outputs
 * @property string|null $RoleArn
 * @property string|null $StackId
 * @property string|null $StackName
 * @property string|null $StackStatus
 * @property string|null $StackStatusReason
 * @property int|null $TimeoutInMinutes
 */
class AwsCloudFormationStackDetails extends Shape
{
    /**
     * @param array{
     *     Capabilities?: list<string>|null,
     *     CreationTime?: string|null,
     *     Description?: string|null,
     *     DisableRollback?: bool|null,
     *     DriftInformation?: AwsCloudFormationStackDriftInformationDetails|null,
     *     EnableTerminationProtection?: bool|null,
     *     LastUpdatedTime?: string|null,
     *     NotificationArns?: list<string>|null,
     *     Outputs?: list<AwsCloudFormationStackOutputsDetails>|null,
     *     RoleArn?: string|null,
     *     StackId?: string|null,
     *     StackName?: string|null,
     *     StackStatus?: string|null,
     *     StackStatusReason?: string|null,
     *     TimeoutInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
