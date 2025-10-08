<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query;

trait QueryTrait
{
    /**
     * @param QueryRequest $args
     * @return QueryResponse
     */
    public function query(QueryRequest $args)
    {
        $result = parent::query($args->toArray());
        return new QueryResponse($result->toArray());
    }
}
