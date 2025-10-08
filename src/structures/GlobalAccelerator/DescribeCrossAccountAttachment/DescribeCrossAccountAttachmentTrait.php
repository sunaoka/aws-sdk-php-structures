<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCrossAccountAttachment;

trait DescribeCrossAccountAttachmentTrait
{
    /**
     * @param DescribeCrossAccountAttachmentRequest $args
     * @return DescribeCrossAccountAttachmentResponse
     */
    public function describeCrossAccountAttachment(DescribeCrossAccountAttachmentRequest $args)
    {
        $result = parent::describeCrossAccountAttachment($args->toArray());
        return new DescribeCrossAccountAttachmentResponse($result->toArray());
    }
}
