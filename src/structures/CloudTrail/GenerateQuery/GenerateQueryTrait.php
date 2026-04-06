<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GenerateQuery;

trait GenerateQueryTrait
{
    /**
     * @param GenerateQueryRequest $args
     * @return GenerateQueryResponse
     */
    public function generateQuery(GenerateQueryRequest $args)
    {
        $result = parent::generateQuery($args->toArray());
        return new GenerateQueryResponse($result->toArray());
    }
}
