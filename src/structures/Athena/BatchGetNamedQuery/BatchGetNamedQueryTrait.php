<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetNamedQuery;

trait BatchGetNamedQueryTrait
{
    /**
     * @param BatchGetNamedQueryRequest $args
     * @return BatchGetNamedQueryResponse
     */
    public function batchGetNamedQuery(BatchGetNamedQueryRequest $args)
    {
        $result = parent::batchGetNamedQuery($args->toArray());
        return new BatchGetNamedQueryResponse($result->toArray());
    }
}
