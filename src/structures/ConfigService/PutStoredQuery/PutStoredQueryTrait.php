<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutStoredQuery;

trait PutStoredQueryTrait
{
    /**
     * @param PutStoredQueryRequest $args
     * @return PutStoredQueryResponse
     */
    public function putStoredQuery(PutStoredQueryRequest $args)
    {
        $result = parent::putStoredQuery($args->toArray());
        return new PutStoredQueryResponse($result->toArray());
    }
}
