<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCrossAccountAttachment;

trait DeleteCrossAccountAttachmentTrait
{
    /**
     * @param DeleteCrossAccountAttachmentRequest $args
     * @return void
     */
    public function deleteCrossAccountAttachment(DeleteCrossAccountAttachmentRequest $args)
    {
        parent::deleteCrossAccountAttachment($args->toArray());
    }
}
