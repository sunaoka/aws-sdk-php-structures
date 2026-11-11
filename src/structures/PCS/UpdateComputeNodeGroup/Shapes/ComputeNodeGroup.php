<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $amiId
 * @property list<string>|null $securityGroupIds
 * @property string|null $sshKeyName
 * @property string $name
 * @property string $id
 * @property string $arn
 * @property string $clusterId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'DELETED'|'SUSPENDING'|'SUSPENDED'|'RESUMING' $status
 * @property list<string> $subnetIds
 * @property 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|'INTERRUPTIBLE_CAPACITY_RESERVATION'|null $purchaseOption
 * @property 'CUSTOM'|'MANAGED'|null $launchTemplateMode
 * @property CustomLaunchTemplate|null $customLaunchTemplate
 * @property string $iamInstanceProfileArn
 * @property ScalingConfiguration $scalingConfiguration
 * @property list<InstanceConfig> $instanceConfigs
 * @property SpotOptions|null $spotOptions
 * @property ComputeNodeGroupSlurmConfiguration|null $slurmConfiguration
 * @property NodeLifecycleActions|null $nodeLifecycleActions
 * @property list<ErrorInfo>|null $errorInfo
 */
class ComputeNodeGroup extends Shape
{
    /**
     * @param array{
     *     amiId?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     sshKeyName?: string|null,
     *     name: string,
     *     id: string,
     *     arn: string,
     *     clusterId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'DELETED'|'SUSPENDING'|'SUSPENDED'|'RESUMING',
     *     subnetIds: list<string>,
     *     purchaseOption?: 'ONDEMAND'|'SPOT'|'CAPACITY_BLOCK'|'INTERRUPTIBLE_CAPACITY_RESERVATION'|null,
     *     launchTemplateMode?: 'CUSTOM'|'MANAGED'|null,
     *     customLaunchTemplate?: CustomLaunchTemplate|null,
     *     iamInstanceProfileArn: string,
     *     scalingConfiguration: ScalingConfiguration,
     *     instanceConfigs: list<InstanceConfig>,
     *     spotOptions?: SpotOptions|null,
     *     slurmConfiguration?: ComputeNodeGroupSlurmConfiguration|null,
     *     nodeLifecycleActions?: NodeLifecycleActions|null,
     *     errorInfo?: list<ErrorInfo>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
