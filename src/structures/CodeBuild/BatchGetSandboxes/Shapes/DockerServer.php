<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE'|'CUSTOM_INSTANCE_TYPE' $computeType
 * @property list<string>|null $securityGroupIds
 * @property DockerServerStatus|null $status
 */
class DockerServer extends Shape
{
    /**
     * @param array{
     *     computeType: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE'|'CUSTOM_INSTANCE_TYPE',
     *     securityGroupIds?: list<string>|null,
     *     status?: DockerServerStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
