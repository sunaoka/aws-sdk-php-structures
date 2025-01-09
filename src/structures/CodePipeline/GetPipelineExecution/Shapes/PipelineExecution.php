<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineName
 * @property int<1, max> $pipelineVersion
 * @property string $pipelineExecutionId
 * @property 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed' $status
 * @property string $statusSummary
 * @property list<ArtifactRevision> $artifactRevisions
 * @property list<ResolvedPipelineVariable> $variables
 * @property ExecutionTrigger $trigger
 * @property 'QUEUED'|'SUPERSEDED'|'PARALLEL' $executionMode
 * @property 'STANDARD'|'ROLLBACK' $executionType
 * @property PipelineRollbackMetadata $rollbackMetadata
 */
class PipelineExecution extends Shape
{
    /**
     * @param array{
     *     pipelineName?: string,
     *     pipelineVersion?: int<1, max>,
     *     pipelineExecutionId?: string,
     *     status?: 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed',
     *     statusSummary?: string,
     *     artifactRevisions?: list<ArtifactRevision>,
     *     variables?: list<ResolvedPipelineVariable>,
     *     trigger?: ExecutionTrigger,
     *     executionMode?: 'QUEUED'|'SUPERSEDED'|'PARALLEL',
     *     executionType?: 'STANDARD'|'ROLLBACK',
     *     rollbackMetadata?: PipelineRollbackMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
