<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateLiveSource;

trait UpdateLiveSourceTrait
{
    /**
     * @param UpdateLiveSourceRequest $args
     * @return UpdateLiveSourceResponse
     */
    public function updateLiveSource(UpdateLiveSourceRequest $args)
    {
        $result = parent::updateLiveSource($args->toArray());
        return new UpdateLiveSourceResponse($result->toArray());
    }
}
