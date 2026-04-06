<?php

namespace Sunaoka\Aws\Structures\S3Control\ListCallerAccessGrants;

trait ListCallerAccessGrantsTrait
{
    /**
     * @param ListCallerAccessGrantsRequest $args
     * @return ListCallerAccessGrantsResponse
     */
    public function listCallerAccessGrants(ListCallerAccessGrantsRequest $args)
    {
        $result = parent::listCallerAccessGrants($args->toArray());
        return new ListCallerAccessGrantsResponse($result->toArray());
    }
}
