<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachment;

trait DescribeAttachmentTrait
{
    /**
     * @param DescribeAttachmentRequest $args
     * @return DescribeAttachmentResponse
     */
    public function describeAttachment(DescribeAttachmentRequest $args)
    {
        $result = parent::describeAttachment($args->toArray());
        return new DescribeAttachmentResponse($result->toArray());
    }
}
