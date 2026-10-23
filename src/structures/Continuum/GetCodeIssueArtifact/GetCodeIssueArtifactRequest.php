<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $issueId
 * @property string $artifactId
 */
class GetCodeIssueArtifactRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     issueId: string,
     *     artifactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
