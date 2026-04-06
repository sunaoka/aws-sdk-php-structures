<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateStudioComponent;

trait UpdateStudioComponentTrait
{
    /**
     * @param UpdateStudioComponentRequest $args
     * @return UpdateStudioComponentResponse
     */
    public function updateStudioComponent(UpdateStudioComponentRequest $args)
    {
        $result = parent::updateStudioComponent($args->toArray());
        return new UpdateStudioComponentResponse($result->toArray());
    }
}
