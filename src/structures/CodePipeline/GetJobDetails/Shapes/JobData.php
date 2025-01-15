<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionTypeId|null $actionTypeId
 * @property ActionConfiguration|null $actionConfiguration
 * @property PipelineContext|null $pipelineContext
 * @property list<Artifact>|null $inputArtifacts
 * @property list<Artifact>|null $outputArtifacts
 * @property AWSSessionCredentials|null $artifactCredentials
 * @property string|null $continuationToken
 * @property EncryptionKey|null $encryptionKey
 */
class JobData extends Shape
{
    /**
     * @param array{
     *     actionTypeId?: ActionTypeId|null,
     *     actionConfiguration?: ActionConfiguration|null,
     *     pipelineContext?: PipelineContext|null,
     *     inputArtifacts?: list<Artifact>|null,
     *     outputArtifacts?: list<Artifact>|null,
     *     artifactCredentials?: AWSSessionCredentials|null,
     *     continuationToken?: string|null,
     *     encryptionKey?: EncryptionKey|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
