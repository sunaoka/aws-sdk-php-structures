<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStudioComponent;

trait DeleteStudioComponentTrait
{
    /**
     * @param DeleteStudioComponentRequest $args
     * @return DeleteStudioComponentResponse
     */
    public function deleteStudioComponent(DeleteStudioComponentRequest $args)
    {
        $result = parent::deleteStudioComponent($args->toArray());
        return new DeleteStudioComponentResponse($result->toArray());
    }
}
