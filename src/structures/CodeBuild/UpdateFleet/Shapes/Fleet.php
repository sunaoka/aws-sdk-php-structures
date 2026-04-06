<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $lastModified
 * @property FleetStatus|null $status
 * @property int<1, max>|null $baseCapacity
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|null $environmentType
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|null $computeType
 * @property ScalingConfigurationOutput|null $scalingConfiguration
 * @property 'QUEUE'|'ON_DEMAND'|null $overflowBehavior
 * @property VpcConfig|null $vpcConfig
 * @property string|null $fleetServiceRole
 * @property list<Tag>|null $tags
 */
class Fleet extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     id?: string|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     lastModified?: \Aws\Api\DateTimeResult|null,
     *     status?: FleetStatus|null,
     *     baseCapacity?: int<1, max>|null,
     *     environmentType?: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|null,
     *     computeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|null,
     *     scalingConfiguration?: ScalingConfigurationOutput|null,
     *     overflowBehavior?: 'QUEUE'|'ON_DEMAND'|null,
     *     vpcConfig?: VpcConfig|null,
     *     fleetServiceRole?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
