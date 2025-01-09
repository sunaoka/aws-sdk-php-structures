<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionTypeId $actionTypeId
 * @property ActionConfiguration $actionConfiguration
 * @property PipelineContext $pipelineContext
 * @property list<Artifact> $inputArtifacts
 * @property list<Artifact> $outputArtifacts
 * @property AWSSessionCredentials $artifactCredentials
 * @property string $continuationToken
 * @property EncryptionKey $encryptionKey
 */
class JobData extends Shape
{
    /**
     * @param array{
     *     actionTypeId?: ActionTypeId,
     *     actionConfiguration?: ActionConfiguration,
     *     pipelineContext?: PipelineContext,
     *     inputArtifacts?: list<Artifact>,
     *     outputArtifacts?: list<Artifact>,
     *     artifactCredentials?: AWSSessionCredentials,
     *     continuationToken?: string,
     *     encryptionKey?: EncryptionKey
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
