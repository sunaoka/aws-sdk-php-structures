<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineName
 * @property int<1, max>|null $pipelineVersion
 * @property string|null $pipelineExecutionId
 * @property 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed'|null $status
 * @property string|null $statusSummary
 * @property list<ArtifactRevision>|null $artifactRevisions
 * @property list<ResolvedPipelineVariable>|null $variables
 * @property ExecutionTrigger|null $trigger
 * @property 'QUEUED'|'SUPERSEDED'|'PARALLEL'|null $executionMode
 * @property 'STANDARD'|'ROLLBACK'|null $executionType
 * @property PipelineRollbackMetadata|null $rollbackMetadata
 */
class PipelineExecution extends Shape
{
    /**
     * @param array{
     *     pipelineName?: string|null,
     *     pipelineVersion?: int<1, max>|null,
     *     pipelineExecutionId?: string|null,
     *     status?: 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed'|null,
     *     statusSummary?: string|null,
     *     artifactRevisions?: list<ArtifactRevision>|null,
     *     variables?: list<ResolvedPipelineVariable>|null,
     *     trigger?: ExecutionTrigger|null,
     *     executionMode?: 'QUEUED'|'SUPERSEDED'|'PARALLEL'|null,
     *     executionType?: 'STANDARD'|'ROLLBACK'|null,
     *     rollbackMetadata?: PipelineRollbackMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
