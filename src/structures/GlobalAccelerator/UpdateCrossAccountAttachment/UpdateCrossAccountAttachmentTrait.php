<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCrossAccountAttachment;

trait UpdateCrossAccountAttachmentTrait
{
    /**
     * @param UpdateCrossAccountAttachmentRequest $args
     * @return UpdateCrossAccountAttachmentResponse
     */
    public function updateCrossAccountAttachment(UpdateCrossAccountAttachmentRequest $args)
    {
        $result = parent::updateCrossAccountAttachment($args->toArray());
        return new UpdateCrossAccountAttachmentResponse($result->toArray());
    }
}
