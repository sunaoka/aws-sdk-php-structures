<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDisassociateFindingIssue;

trait BatchDisassociateFindingIssueTrait
{
    /**
     * @param BatchDisassociateFindingIssueRequest $args
     * @return BatchDisassociateFindingIssueResponse
     */
    public function batchDisassociateFindingIssue(BatchDisassociateFindingIssueRequest $args)
    {
        $result = parent::batchDisassociateFindingIssue($args->toArray());
        return new BatchDisassociateFindingIssueResponse($result->toArray());
    }
}
