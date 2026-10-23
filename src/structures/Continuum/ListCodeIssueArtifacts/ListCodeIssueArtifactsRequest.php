<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeIssueArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $issueId
 * @property 'EVIDENCE'|'AGENT_COMMUNICATION'|'VALIDATION_EVIDENCE'|'REMEDIATION_PROPOSAL'|'DECISION'|'PATCH'|null $artifactType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListCodeIssueArtifactsRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     issueId: string,
     *     artifactType?: 'EVIDENCE'|'AGENT_COMMUNICATION'|'VALIDATION_EVIDENCE'|'REMEDIATION_PROPOSAL'|'DECISION'|'PATCH'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
