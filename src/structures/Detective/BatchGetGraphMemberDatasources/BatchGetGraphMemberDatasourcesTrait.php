<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetGraphMemberDatasources;

trait BatchGetGraphMemberDatasourcesTrait
{
    /**
     * @param BatchGetGraphMemberDatasourcesRequest $args
     * @return BatchGetGraphMemberDatasourcesResponse
     */
    public function batchGetGraphMemberDatasources(BatchGetGraphMemberDatasourcesRequest $args)
    {
        $result = parent::batchGetGraphMemberDatasources($args->toArray());
        return new BatchGetGraphMemberDatasourcesResponse($result->toArray());
    }
}
