<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments;

trait DescribeS3AccessPointAttachmentsTrait
{
    /**
     * @param DescribeS3AccessPointAttachmentsRequest $args
     * @return DescribeS3AccessPointAttachmentsResponse
     */
    public function describeS3AccessPointAttachments(DescribeS3AccessPointAttachmentsRequest $args)
    {
        $result = parent::describeS3AccessPointAttachments($args->toArray());
        return new DescribeS3AccessPointAttachmentsResponse($result->toArray());
    }
}
