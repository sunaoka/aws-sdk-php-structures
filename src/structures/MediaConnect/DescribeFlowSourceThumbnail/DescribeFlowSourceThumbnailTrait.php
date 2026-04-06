<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceThumbnail;

trait DescribeFlowSourceThumbnailTrait
{
    /**
     * @param DescribeFlowSourceThumbnailRequest $args
     * @return DescribeFlowSourceThumbnailResponse
     */
    public function describeFlowSourceThumbnail(DescribeFlowSourceThumbnailRequest $args)
    {
        $result = parent::describeFlowSourceThumbnail($args->toArray());
        return new DescribeFlowSourceThumbnailResponse($result->toArray());
    }
}
