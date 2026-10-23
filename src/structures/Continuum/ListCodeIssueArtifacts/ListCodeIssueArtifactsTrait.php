<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeIssueArtifacts;

trait ListCodeIssueArtifactsTrait
{
    /**
     * @param ListCodeIssueArtifactsRequest $args
     * @return ListCodeIssueArtifactsResponse
     */
    public function listCodeIssueArtifacts(ListCodeIssueArtifactsRequest $args)
    {
        $result = parent::listCodeIssueArtifacts($args->toArray());
        return new ListCodeIssueArtifactsResponse($result->toArray());
    }
}
