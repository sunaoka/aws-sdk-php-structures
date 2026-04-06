<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStudio;

trait DeleteStudioTrait
{
    /**
     * @param DeleteStudioRequest $args
     * @return DeleteStudioResponse
     */
    public function deleteStudio(DeleteStudioRequest $args)
    {
        $result = parent::deleteStudio($args->toArray());
        return new DeleteStudioResponse($result->toArray());
    }
}
