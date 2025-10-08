<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags;

trait DescribeImageTagsTrait
{
    /**
     * @param DescribeImageTagsRequest $args
     * @return DescribeImageTagsResponse
     */
    public function describeImageTags(DescribeImageTagsRequest $args)
    {
        $result = parent::describeImageTags($args->toArray());
        return new DescribeImageTagsResponse($result->toArray());
    }
}
