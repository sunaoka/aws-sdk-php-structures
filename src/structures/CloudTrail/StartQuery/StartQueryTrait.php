<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartQuery;

trait StartQueryTrait
{
    /**
     * @param StartQueryRequest $args
     * @return StartQueryResponse
     */
    public function startQuery(StartQueryRequest $args)
    {
        $result = parent::startQuery($args->toArray());
        return new StartQueryResponse($result->toArray());
    }
}
