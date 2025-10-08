<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitAttachmentStateChanges;

trait SubmitAttachmentStateChangesTrait
{
    /**
     * @param SubmitAttachmentStateChangesRequest $args
     * @return SubmitAttachmentStateChangesResponse
     */
    public function submitAttachmentStateChanges(SubmitAttachmentStateChangesRequest $args)
    {
        $result = parent::submitAttachmentStateChanges($args->toArray());
        return new SubmitAttachmentStateChangesResponse($result->toArray());
    }
}
