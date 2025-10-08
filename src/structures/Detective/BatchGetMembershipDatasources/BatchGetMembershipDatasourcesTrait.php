<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetMembershipDatasources;

trait BatchGetMembershipDatasourcesTrait
{
    /**
     * @param BatchGetMembershipDatasourcesRequest $args
     * @return BatchGetMembershipDatasourcesResponse
     */
    public function batchGetMembershipDatasources(BatchGetMembershipDatasourcesRequest $args)
    {
        $result = parent::batchGetMembershipDatasources($args->toArray());
        return new BatchGetMembershipDatasourcesResponse($result->toArray());
    }
}
