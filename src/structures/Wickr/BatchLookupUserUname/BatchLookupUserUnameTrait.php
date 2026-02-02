<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchLookupUserUname;

trait BatchLookupUserUnameTrait
{
    /**
     * @param BatchLookupUserUnameRequest $args
     * @return BatchLookupUserUnameResponse
     */
    public function batchLookupUserUname(BatchLookupUserUnameRequest $args)
    {
        $result = parent::batchLookupUserUname($args->toArray());
        return new BatchLookupUserUnameResponse($result->toArray());
    }
}
