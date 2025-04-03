<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'WINDOWS_SERVER_2022_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM' $type
 * @property string $image
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE' $computeType
 * @property ComputeConfiguration|null $computeConfiguration
 * @property ProjectFleet|null $fleet
 * @property list<EnvironmentVariable>|null $environmentVariables
 * @property bool|null $privilegedMode
 * @property string|null $certificate
 * @property RegistryCredential|null $registryCredential
 * @property 'CODEBUILD'|'SERVICE_ROLE'|null $imagePullCredentialsType
 */
class ProjectEnvironment extends Shape
{
    /**
     * @param array{
     *     type: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'WINDOWS_SERVER_2022_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM',
     *     image: string,
     *     computeType: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE',
     *     computeConfiguration?: ComputeConfiguration|null,
     *     fleet?: ProjectFleet|null,
     *     environmentVariables?: list<EnvironmentVariable>|null,
     *     privilegedMode?: bool|null,
     *     certificate?: string|null,
     *     registryCredential?: RegistryCredential|null,
     *     imagePullCredentialsType?: 'CODEBUILD'|'SERVICE_ROLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
