<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact;

trait GetCodeIssueArtifactTrait
{
    /**
     * @param GetCodeIssueArtifactRequest $args
     * @return GetCodeIssueArtifactResponse
     */
    public function getCodeIssueArtifact(GetCodeIssueArtifactRequest $args)
    {
        $result = parent::getCodeIssueArtifact($args->toArray());
        return new GetCodeIssueArtifactResponse($result->toArray());
    }
}
