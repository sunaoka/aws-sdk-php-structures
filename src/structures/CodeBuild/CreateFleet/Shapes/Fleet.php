<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $id
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property FleetStatus $status
 * @property int<1, max> $baseCapacity
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM' $environmentType
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE' $computeType
 * @property ComputeConfiguration $computeConfiguration
 * @property ScalingConfigurationOutput $scalingConfiguration
 * @property 'QUEUE'|'ON_DEMAND' $overflowBehavior
 * @property VpcConfig $vpcConfig
 * @property ProxyConfiguration $proxyConfiguration
 * @property string $imageId
 * @property string $fleetServiceRole
 * @property list<Tag> $tags
 */
class Fleet extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     id?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     lastModified?: \Aws\Api\DateTimeResult,
     *     status?: FleetStatus,
     *     baseCapacity?: int<1, max>,
     *     environmentType?: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM',
     *     computeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE',
     *     computeConfiguration?: ComputeConfiguration,
     *     scalingConfiguration?: ScalingConfigurationOutput,
     *     overflowBehavior?: 'QUEUE'|'ON_DEMAND',
     *     vpcConfig?: VpcConfig,
     *     proxyConfiguration?: ProxyConfiguration,
     *     imageId?: string,
     *     fleetServiceRole?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
