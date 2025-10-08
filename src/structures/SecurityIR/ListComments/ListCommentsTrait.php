<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListComments;

trait ListCommentsTrait
{
    /**
     * @param ListCommentsRequest $args
     * @return ListCommentsResponse
     */
    public function listComments(ListCommentsRequest $args)
    {
        $result = parent::listComments($args->toArray());
        return new ListCommentsResponse($result->toArray());
    }
}
