<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery;

trait PrepareQueryTrait
{
    /**
     * @param PrepareQueryRequest $args
     * @return PrepareQueryResponse
     */
    public function prepareQuery(PrepareQueryRequest $args)
    {
        $result = parent::prepareQuery($args->toArray());
        return new PrepareQueryResponse($result->toArray());
    }
}
