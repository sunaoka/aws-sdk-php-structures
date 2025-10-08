<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTags;

trait DescribeTagsTrait
{
    /**
     * @param DescribeTagsRequest $args
     * @return DescribeTagsResponse
     */
    public function describeTags(DescribeTagsRequest $args)
    {
        $result = parent::describeTags($args->toArray());
        return new DescribeTagsResponse($result->toArray());
    }
}
