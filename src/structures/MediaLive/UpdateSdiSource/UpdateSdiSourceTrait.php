<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateSdiSource;

trait UpdateSdiSourceTrait
{
    /**
     * @param UpdateSdiSourceRequest $args
     * @return UpdateSdiSourceResponse
     */
    public function updateSdiSource(UpdateSdiSourceRequest $args)
    {
        $result = parent::updateSdiSource($args->toArray());
        return new UpdateSdiSourceResponse($result->toArray());
    }
}
