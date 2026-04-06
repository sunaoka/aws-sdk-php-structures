<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER' $type
 * @property string $image
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_2XLARGE' $computeType
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
     *     type: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER',
     *     image: string,
     *     computeType: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_2XLARGE',
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
