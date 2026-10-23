<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeIssueArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $artifactId
 * @property 'EVIDENCE'|'AGENT_COMMUNICATION'|'VALIDATION_EVIDENCE'|'REMEDIATION_PROPOSAL'|'DECISION'|'PATCH' $artifactType
 * @property string $mediaType
 * @property IssueArtifactProducerSummary $producer
 * @property int $contentSizeBytes
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class IssueArtifactItem extends Shape
{
    /**
     * @param array{
     *     artifactId: string,
     *     artifactType: 'EVIDENCE'|'AGENT_COMMUNICATION'|'VALIDATION_EVIDENCE'|'REMEDIATION_PROPOSAL'|'DECISION'|'PATCH',
     *     mediaType: string,
     *     producer: IssueArtifactProducerSummary,
     *     contentSizeBytes: int,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
