<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property int<1, max>|null $baseCapacity
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|null $environmentType
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|null $computeType
 * @property Shapes\ScalingConfigurationInput|null $scalingConfiguration
 * @property 'QUEUE'|'ON_DEMAND'|null $overflowBehavior
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property string|null $fleetServiceRole
 * @property list<Shapes\Tag>|null $tags
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     baseCapacity?: int<1, max>|null,
     *     environmentType?: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|null,
     *     computeType?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|null,
     *     scalingConfiguration?: Shapes\ScalingConfigurationInput|null,
     *     overflowBehavior?: 'QUEUE'|'ON_DEMAND'|null,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     fleetServiceRole?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
