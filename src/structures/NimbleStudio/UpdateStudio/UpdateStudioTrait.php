<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateStudio;

trait UpdateStudioTrait
{
    /**
     * @param UpdateStudioRequest $args
     * @return UpdateStudioResponse
     */
    public function updateStudio(UpdateStudioRequest $args)
    {
        $result = parent::updateStudio($args->toArray());
        return new UpdateStudioResponse($result->toArray());
    }
}
