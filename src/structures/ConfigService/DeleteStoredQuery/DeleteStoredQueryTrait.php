<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteStoredQuery;

trait DeleteStoredQueryTrait
{
    /**
     * @param DeleteStoredQueryRequest $args
     * @return DeleteStoredQueryResponse
     */
    public function deleteStoredQuery(DeleteStoredQueryRequest $args)
    {
        $result = parent::deleteStoredQuery($args->toArray());
        return new DeleteStoredQueryResponse($result->toArray());
    }
}
