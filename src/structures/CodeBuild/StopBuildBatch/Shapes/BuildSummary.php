<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $requestedOn
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED' $buildStatus
 * @property ResolvedArtifact $primaryArtifact
 * @property list<ResolvedArtifact> $secondaryArtifacts
 */
class BuildSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     requestedOn?: \Aws\Api\DateTimeResult,
     *     buildStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED',
     *     primaryArtifact?: ResolvedArtifact,
     *     secondaryArtifacts?: list<ResolvedArtifact>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
