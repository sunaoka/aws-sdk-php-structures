<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptionKey
 * @property list<AwsCodeBuildProjectArtifactsDetails> $Artifacts
 * @property AwsCodeBuildProjectEnvironment $Environment
 * @property string $Name
 * @property AwsCodeBuildProjectSource $Source
 * @property string $ServiceRole
 * @property AwsCodeBuildProjectLogsConfigDetails $LogsConfig
 * @property AwsCodeBuildProjectVpcConfig $VpcConfig
 * @property list<AwsCodeBuildProjectArtifactsDetails> $SecondaryArtifacts
 */
class AwsCodeBuildProjectDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionKey?: string,
     *     Artifacts?: list<AwsCodeBuildProjectArtifactsDetails>,
     *     Environment?: AwsCodeBuildProjectEnvironment,
     *     Name?: string,
     *     Source?: AwsCodeBuildProjectSource,
     *     ServiceRole?: string,
     *     LogsConfig?: AwsCodeBuildProjectLogsConfigDetails,
     *     VpcConfig?: AwsCodeBuildProjectVpcConfig,
     *     SecondaryArtifacts?: list<AwsCodeBuildProjectArtifactsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
