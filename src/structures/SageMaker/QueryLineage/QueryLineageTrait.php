<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage;

trait QueryLineageTrait
{
    /**
     * @param QueryLineageRequest $args
     * @return QueryLineageResponse
     */
    public function queryLineage(QueryLineageRequest $args)
    {
        $result = parent::queryLineage($args->toArray());
        return new QueryLineageResponse($result->toArray());
    }
}
