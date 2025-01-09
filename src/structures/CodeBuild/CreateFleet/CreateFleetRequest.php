<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $baseCapacity
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM' $environmentType
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE' $computeType
 * @property Shapes\ComputeConfiguration $computeConfiguration
 * @property Shapes\ScalingConfigurationInput $scalingConfiguration
 * @property 'QUEUE'|'ON_DEMAND' $overflowBehavior
 * @property Shapes\VpcConfig $vpcConfig
 * @property Shapes\ProxyConfiguration $proxyConfiguration
 * @property string $imageId
 * @property string $fleetServiceRole
 * @property list<Shapes\Tag> $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     baseCapacity: int,
     *     environmentType: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM',
     *     computeType: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE',
     *     computeConfiguration?: Shapes\ComputeConfiguration,
     *     scalingConfiguration?: Shapes\ScalingConfigurationInput,
     *     overflowBehavior?: 'QUEUE'|'ON_DEMAND',
     *     vpcConfig?: Shapes\VpcConfig,
     *     proxyConfiguration?: Shapes\ProxyConfiguration,
     *     imageId?: string,
     *     fleetServiceRole?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
