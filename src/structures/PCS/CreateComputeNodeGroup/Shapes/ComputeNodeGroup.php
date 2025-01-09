<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property string $arn
 * @property string $clusterId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|'DELETED' $status
 * @property string $amiId
 * @property list<string> $subnetIds
 * @property 'ONDEMAND'|'SPOT' $purchaseOption
 * @property CustomLaunchTemplate $customLaunchTemplate
 * @property string $iamInstanceProfileArn
 * @property ScalingConfiguration $scalingConfiguration
 * @property list<InstanceConfig> $instanceConfigs
 * @property SpotOptions $spotOptions
 * @property ComputeNodeGroupSlurmConfiguration $slurmConfiguration
 * @property list<ErrorInfo> $errorInfo
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
     *     amiId?: string,
     *     subnetIds: list<string>,
     *     purchaseOption?: 'ONDEMAND'|'SPOT',
     *     customLaunchTemplate: CustomLaunchTemplate,
     *     iamInstanceProfileArn: string,
     *     scalingConfiguration: ScalingConfiguration,
     *     instanceConfigs: list<InstanceConfig>,
     *     spotOptions?: SpotOptions,
     *     slurmConfiguration?: ComputeNodeGroupSlurmConfiguration,
     *     errorInfo?: list<ErrorInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
