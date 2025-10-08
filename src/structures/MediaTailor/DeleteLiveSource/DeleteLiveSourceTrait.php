<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteLiveSource;

trait DeleteLiveSourceTrait
{
    /**
     * @param DeleteLiveSourceRequest $args
     * @return DeleteLiveSourceResponse
     */
    public function deleteLiveSource(DeleteLiveSourceRequest $args)
    {
        $result = parent::deleteLiveSource($args->toArray());
        return new DeleteLiveSourceResponse($result->toArray());
    }
}
