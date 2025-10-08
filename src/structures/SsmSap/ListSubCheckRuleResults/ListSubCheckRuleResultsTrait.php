<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListSubCheckRuleResults;

trait ListSubCheckRuleResultsTrait
{
    /**
     * @param ListSubCheckRuleResultsRequest $args
     * @return ListSubCheckRuleResultsResponse
     */
    public function listSubCheckRuleResults(ListSubCheckRuleResultsRequest $args)
    {
        $result = parent::listSubCheckRuleResults($args->toArray());
        return new ListSubCheckRuleResultsResponse($result->toArray());
    }
}
