<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property list<Shapes\ProjectSource>|null $secondarySourcesOverride
 * @property list<Shapes\ProjectSourceVersion>|null $secondarySourcesVersionOverride
 * @property string|null $sourceVersion
 * @property Shapes\ProjectArtifacts|null $artifactsOverride
 * @property list<Shapes\ProjectArtifacts>|null $secondaryArtifactsOverride
 * @property list<Shapes\EnvironmentVariable>|null $environmentVariablesOverride
 * @property 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE'|null $sourceTypeOverride
 * @property string|null $sourceLocationOverride
 * @property Shapes\SourceAuth|null $sourceAuthOverride
 * @property int<0, max>|null $gitCloneDepthOverride
 * @property Shapes\GitSubmodulesConfig|null $gitSubmodulesConfigOverride
 * @property string|null $buildspecOverride
 * @property bool|null $insecureSslOverride
 * @property bool|null $reportBuildBatchStatusOverride
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM'|null $environmentTypeOverride
 * @property string|null $imageOverride
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE'|null $computeTypeOverride
 * @property string|null $certificateOverride
 * @property Shapes\ProjectCache|null $cacheOverride
 * @property string|null $serviceRoleOverride
 * @property bool|null $privilegedModeOverride
 * @property int<5, 2160>|null $buildTimeoutInMinutesOverride
 * @property int<5, 480>|null $queuedTimeoutInMinutesOverride
 * @property string|null $encryptionKeyOverride
 * @property string|null $idempotencyToken
 * @property Shapes\LogsConfig|null $logsConfigOverride
 * @property Shapes\RegistryCredential|null $registryCredentialOverride
 * @property 'CODEBUILD'|'SERVICE_ROLE'|null $imagePullCredentialsTypeOverride
 * @property Shapes\ProjectBuildBatchConfig|null $buildBatchConfigOverride
 * @property bool|null $debugSessionEnabled
 */
class StartBuildBatchRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     secondarySourcesOverride?: list<Shapes\ProjectSource>|null,
     *     secondarySourcesVersionOverride?: list<Shapes\ProjectSourceVersion>|null,
     *     sourceVersion?: string|null,
     *     artifactsOverride?: Shapes\ProjectArtifacts|null,
     *     secondaryArtifactsOverride?: list<Shapes\ProjectArtifacts>|null,
     *     environmentVariablesOverride?: list<Shapes\EnvironmentVariable>|null,
     *     sourceTypeOverride?: 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE'|null,
     *     sourceLocationOverride?: string|null,
     *     sourceAuthOverride?: Shapes\SourceAuth|null,
     *     gitCloneDepthOverride?: int<0, max>|null,
     *     gitSubmodulesConfigOverride?: Shapes\GitSubmodulesConfig|null,
     *     buildspecOverride?: string|null,
     *     insecureSslOverride?: bool|null,
     *     reportBuildBatchStatusOverride?: bool|null,
     *     environmentTypeOverride?: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM'|null,
     *     imageOverride?: string|null,
     *     computeTypeOverride?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE'|null,
     *     certificateOverride?: string|null,
     *     cacheOverride?: Shapes\ProjectCache|null,
     *     serviceRoleOverride?: string|null,
     *     privilegedModeOverride?: bool|null,
     *     buildTimeoutInMinutesOverride?: int<5, 2160>|null,
     *     queuedTimeoutInMinutesOverride?: int<5, 480>|null,
     *     encryptionKeyOverride?: string|null,
     *     idempotencyToken?: string|null,
     *     logsConfigOverride?: Shapes\LogsConfig|null,
     *     registryCredentialOverride?: Shapes\RegistryCredential|null,
     *     imagePullCredentialsTypeOverride?: 'CODEBUILD'|'SERVICE_ROLE'|null,
     *     buildBatchConfigOverride?: Shapes\ProjectBuildBatchConfig|null,
     *     debugSessionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
