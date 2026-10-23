<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeIssues;

trait ListCodeIssuesTrait
{
    /**
     * @param ListCodeIssuesRequest $args
     * @return ListCodeIssuesResponse
     */
    public function listCodeIssues(ListCodeIssuesRequest $args)
    {
        $result = parent::listCodeIssues($args->toArray());
        return new ListCodeIssuesResponse($result->toArray());
    }
}
