<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $artifactId
 * @property 'EVIDENCE'|'AGENT_COMMUNICATION'|'VALIDATION_EVIDENCE'|'REMEDIATION_PROPOSAL'|'DECISION'|'PATCH' $artifactType
 * @property string $mediaType
 * @property Shapes\IssueArtifactBody $body
 * @property Shapes\Document|null $metadata
 * @property Shapes\IssueArtifactProducerSummary $producer
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class GetCodeIssueArtifactResponse extends Response
{
}
