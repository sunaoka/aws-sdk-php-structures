<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCrossAccountAttachment;

trait CreateCrossAccountAttachmentTrait
{
    /**
     * @param CreateCrossAccountAttachmentRequest $args
     * @return CreateCrossAccountAttachmentResponse
     */
    public function createCrossAccountAttachment(CreateCrossAccountAttachmentRequest $args)
    {
        $result = parent::createCrossAccountAttachment($args->toArray());
        return new CreateCrossAccountAttachmentResponse($result->toArray());
    }
}
