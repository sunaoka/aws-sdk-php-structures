<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $requestedOn
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null $buildStatus
 * @property ResolvedArtifact|null $primaryArtifact
 * @property list<ResolvedArtifact>|null $secondaryArtifacts
 */
class BuildSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     requestedOn?: \Aws\Api\DateTimeResult|null,
     *     buildStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null,
     *     primaryArtifact?: ResolvedArtifact|null,
     *     secondaryArtifacts?: list<ResolvedArtifact>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
