<?php

namespace Sunaoka\Aws\Structures\Glue\PutAttachment;

trait PutAttachmentTrait
{
    /**
     * @param PutAttachmentRequest $args
     * @return PutAttachmentResponse
     */
    public function putAttachment(PutAttachmentRequest $args)
    {
        $result = parent::putAttachment($args->toArray());
        return new PutAttachmentResponse($result->toArray());
    }
}
