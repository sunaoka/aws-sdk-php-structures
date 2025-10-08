<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeComments;

trait DescribeCommentsTrait
{
    /**
     * @param DescribeCommentsRequest $args
     * @return DescribeCommentsResponse
     */
    public function describeComments(DescribeCommentsRequest $args)
    {
        $result = parent::describeComments($args->toArray());
        return new DescribeCommentsResponse($result->toArray());
    }
}
