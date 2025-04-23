<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property int<1, max>|null $baseCapacity
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'WINDOWS_SERVER_2022_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM'|null $environmentType
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE'|'CUSTOM_INSTANCE_TYPE'|null $computeType
 * @property Shapes\ComputeConfiguration|null $computeConfiguration
 * @property Shapes\ScalingConfigurationInput|null $scalingConfiguration
 * @property 'QUEUE'|'ON_DEMAND'|null $overflowBehavior
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property Shapes\ProxyConfiguration|null $proxyConfiguration
 * @property string|null $imageId
 * @property string|null $fleetServiceRole
 * @property list<Shapes\Tag>|null $tags
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     baseCapacity?: int<1, max>|null,
     *     environmentType?: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'WINDOWS_SERVER_2022_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM'|null,
     *     computeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE'|'CUSTOM_INSTANCE_TYPE'|null,
     *     computeConfiguration?: Shapes\ComputeConfiguration|null,
     *     scalingConfiguration?: Shapes\ScalingConfigurationInput|null,
     *     overflowBehavior?: 'QUEUE'|'ON_DEMAND'|null,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     proxyConfiguration?: Shapes\ProxyConfiguration|null,
     *     imageId?: string|null,
     *     fleetServiceRole?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
