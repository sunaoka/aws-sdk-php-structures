<?php

namespace Sunaoka\Aws\Structures\MTurk\ListHITs;

trait ListHITsTrait
{
    /**
     * @param ListHITsRequest $args
     * @return ListHITsResponse
     */
    public function listHITs(ListHITsRequest $args)
    {
        $result = parent::listHITs($args->toArray());
        return new ListHITsResponse($result->toArray());
    }
}
