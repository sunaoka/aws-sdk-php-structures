<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocationResults;

trait ListRemoteSourceActionInvocationResultsTrait
{
    /**
     * @param ListRemoteSourceActionInvocationResultsRequest $args
     * @return ListRemoteSourceActionInvocationResultsResponse
     */
    public function listRemoteSourceActionInvocationResults(ListRemoteSourceActionInvocationResultsRequest $args)
    {
        $result = parent::listRemoteSourceActionInvocationResults($args->toArray());
        return new ListRemoteSourceActionInvocationResultsResponse($result->toArray());
    }
}
