<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $arn
 * @property string $clusterId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'DELETED' $status
 * @property string|null $amiId
 * @property list<string> $subnetIds
 * @property 'ONDEMAND'|'SPOT'|null $purchaseOption
 * @property CustomLaunchTemplate $customLaunchTemplate
 * @property string $iamInstanceProfileArn
 * @property ScalingConfiguration $scalingConfiguration
 * @property list<InstanceConfig> $instanceConfigs
 * @property SpotOptions|null $spotOptions
 * @property ComputeNodeGroupSlurmConfiguration|null $slurmConfiguration
 * @property list<ErrorInfo>|null $errorInfo
 */
class ComputeNodeGroup extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     arn: string,
     *     clusterId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'DELETED',
     *     amiId?: string|null,
     *     subnetIds: list<string>,
     *     purchaseOption?: 'ONDEMAND'|'SPOT'|null,
     *     customLaunchTemplate: CustomLaunchTemplate,
     *     iamInstanceProfileArn: string,
     *     scalingConfiguration: ScalingConfiguration,
     *     instanceConfigs: list<InstanceConfig>,
     *     spotOptions?: SpotOptions|null,
     *     slurmConfiguration?: ComputeNodeGroupSlurmConfiguration|null,
     *     errorInfo?: list<ErrorInfo>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
