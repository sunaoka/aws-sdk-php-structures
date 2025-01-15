<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EncryptionKey
 * @property list<AwsCodeBuildProjectArtifactsDetails>|null $Artifacts
 * @property AwsCodeBuildProjectEnvironment|null $Environment
 * @property string|null $Name
 * @property AwsCodeBuildProjectSource|null $Source
 * @property string|null $ServiceRole
 * @property AwsCodeBuildProjectLogsConfigDetails|null $LogsConfig
 * @property AwsCodeBuildProjectVpcConfig|null $VpcConfig
 * @property list<AwsCodeBuildProjectArtifactsDetails>|null $SecondaryArtifacts
 */
class AwsCodeBuildProjectDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionKey?: string|null,
     *     Artifacts?: list<AwsCodeBuildProjectArtifactsDetails>|null,
     *     Environment?: AwsCodeBuildProjectEnvironment|null,
     *     Name?: string|null,
     *     Source?: AwsCodeBuildProjectSource|null,
     *     ServiceRole?: string|null,
     *     LogsConfig?: AwsCodeBuildProjectLogsConfigDetails|null,
     *     VpcConfig?: AwsCodeBuildProjectVpcConfig|null,
     *     SecondaryArtifacts?: list<AwsCodeBuildProjectArtifactsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
