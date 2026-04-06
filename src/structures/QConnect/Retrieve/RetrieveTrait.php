<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve;

trait RetrieveTrait
{
    /**
     * @param RetrieveRequest $args
     * @return RetrieveResponse
     */
    public function retrieve(RetrieveRequest $args)
    {
        $result = parent::retrieve($args->toArray());
        return new RetrieveResponse($result->toArray());
    }
}
