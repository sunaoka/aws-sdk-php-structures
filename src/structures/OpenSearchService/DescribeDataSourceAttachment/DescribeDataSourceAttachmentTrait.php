<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDataSourceAttachment;

trait DescribeDataSourceAttachmentTrait
{
    /**
     * @param DescribeDataSourceAttachmentRequest $args
     * @return DescribeDataSourceAttachmentResponse
     */
    public function describeDataSourceAttachment(DescribeDataSourceAttachmentRequest $args)
    {
        $result = parent::describeDataSourceAttachment($args->toArray());
        return new DescribeDataSourceAttachmentResponse($result->toArray());
    }
}
