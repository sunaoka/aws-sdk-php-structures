<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property list<Shapes\ProjectSource> $secondarySourcesOverride
 * @property list<Shapes\ProjectSourceVersion> $secondarySourcesVersionOverride
 * @property string $sourceVersion
 * @property Shapes\ProjectArtifacts $artifactsOverride
 * @property list<Shapes\ProjectArtifacts> $secondaryArtifactsOverride
 * @property list<Shapes\EnvironmentVariable> $environmentVariablesOverride
 * @property 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE' $sourceTypeOverride
 * @property string $sourceLocationOverride
 * @property Shapes\SourceAuth $sourceAuthOverride
 * @property int $gitCloneDepthOverride
 * @property Shapes\GitSubmodulesConfig $gitSubmodulesConfigOverride
 * @property string $buildspecOverride
 * @property bool $insecureSslOverride
 * @property bool $reportBuildBatchStatusOverride
 * @property 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM' $environmentTypeOverride
 * @property string $imageOverride
 * @property 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE' $computeTypeOverride
 * @property string $certificateOverride
 * @property Shapes\ProjectCache $cacheOverride
 * @property string $serviceRoleOverride
 * @property bool $privilegedModeOverride
 * @property int $buildTimeoutInMinutesOverride
 * @property int $queuedTimeoutInMinutesOverride
 * @property string $encryptionKeyOverride
 * @property string $idempotencyToken
 * @property Shapes\LogsConfig $logsConfigOverride
 * @property Shapes\RegistryCredential $registryCredentialOverride
 * @property 'CODEBUILD'|'SERVICE_ROLE' $imagePullCredentialsTypeOverride
 * @property Shapes\ProjectBuildBatchConfig $buildBatchConfigOverride
 * @property bool $debugSessionEnabled
 */
class StartBuildBatchRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     secondarySourcesOverride?: list<Shapes\ProjectSource>,
     *     secondarySourcesVersionOverride?: list<Shapes\ProjectSourceVersion>,
     *     sourceVersion?: string,
     *     artifactsOverride?: Shapes\ProjectArtifacts,
     *     secondaryArtifactsOverride?: list<Shapes\ProjectArtifacts>,
     *     environmentVariablesOverride?: list<Shapes\EnvironmentVariable>,
     *     sourceTypeOverride?: 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE',
     *     sourceLocationOverride?: string,
     *     sourceAuthOverride?: Shapes\SourceAuth,
     *     gitCloneDepthOverride?: int,
     *     gitSubmodulesConfigOverride?: Shapes\GitSubmodulesConfig,
     *     buildspecOverride?: string,
     *     insecureSslOverride?: bool,
     *     reportBuildBatchStatusOverride?: bool,
     *     environmentTypeOverride?: 'WINDOWS_CONTAINER'|'LINUX_CONTAINER'|'LINUX_GPU_CONTAINER'|'ARM_CONTAINER'|'WINDOWS_SERVER_2019_CONTAINER'|'LINUX_LAMBDA_CONTAINER'|'ARM_LAMBDA_CONTAINER'|'LINUX_EC2'|'ARM_EC2'|'WINDOWS_EC2'|'MAC_ARM',
     *     imageOverride?: string,
     *     computeTypeOverride?: 'BUILD_GENERAL1_SMALL'|'BUILD_GENERAL1_MEDIUM'|'BUILD_GENERAL1_LARGE'|'BUILD_GENERAL1_XLARGE'|'BUILD_GENERAL1_2XLARGE'|'BUILD_LAMBDA_1GB'|'BUILD_LAMBDA_2GB'|'BUILD_LAMBDA_4GB'|'BUILD_LAMBDA_8GB'|'BUILD_LAMBDA_10GB'|'ATTRIBUTE_BASED_COMPUTE',
     *     certificateOverride?: string,
     *     cacheOverride?: Shapes\ProjectCache,
     *     serviceRoleOverride?: string,
     *     privilegedModeOverride?: bool,
     *     buildTimeoutInMinutesOverride?: int,
     *     queuedTimeoutInMinutesOverride?: int,
     *     encryptionKeyOverride?: string,
     *     idempotencyToken?: string,
     *     logsConfigOverride?: Shapes\LogsConfig,
     *     registryCredentialOverride?: Shapes\RegistryCredential,
     *     imagePullCredentialsTypeOverride?: 'CODEBUILD'|'SERVICE_ROLE',
     *     buildBatchConfigOverride?: Shapes\ProjectBuildBatchConfig,
     *     debugSessionEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
