<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssue;

trait GetCodeIssueTrait
{
    /**
     * @param GetCodeIssueRequest $args
     * @return GetCodeIssueResponse
     */
    public function getCodeIssue(GetCodeIssueRequest $args)
    {
        $result = parent::getCodeIssue($args->toArray());
        return new GetCodeIssueResponse($result->toArray());
    }
}
