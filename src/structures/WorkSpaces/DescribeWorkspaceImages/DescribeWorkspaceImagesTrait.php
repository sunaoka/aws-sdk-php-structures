<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages;

trait DescribeWorkspaceImagesTrait
{
    /**
     * @param DescribeWorkspaceImagesRequest $args
     * @return DescribeWorkspaceImagesResponse
     */
    public function describeWorkspaceImages(DescribeWorkspaceImagesRequest $args)
    {
        $result = parent::describeWorkspaceImages($args->toArray());
        return new DescribeWorkspaceImagesResponse($result->toArray());
    }
}
