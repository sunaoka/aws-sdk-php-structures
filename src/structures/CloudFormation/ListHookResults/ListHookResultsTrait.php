<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults;

trait ListHookResultsTrait
{
    /**
     * @param ListHookResultsRequest $args
     * @return ListHookResultsResponse
     */
    public function listHookResults(ListHookResultsRequest $args)
    {
        $result = parent::listHookResults($args->toArray());
        return new ListHookResultsResponse($result->toArray());
    }
}
