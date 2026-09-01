<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachmentUploadStatus;

trait DescribeAttachmentUploadStatusTrait
{
    /**
     * @param DescribeAttachmentUploadStatusRequest $args
     * @return DescribeAttachmentUploadStatusResponse
     */
    public function describeAttachmentUploadStatus(DescribeAttachmentUploadStatusRequest $args)
    {
        $result = parent::describeAttachmentUploadStatus($args->toArray());
        return new DescribeAttachmentUploadStatusResponse($result->toArray());
    }
}
