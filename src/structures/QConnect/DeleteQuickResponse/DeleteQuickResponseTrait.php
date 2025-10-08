<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteQuickResponse;

trait DeleteQuickResponseTrait
{
    /**
     * @param DeleteQuickResponseRequest $args
     * @return DeleteQuickResponseResponse
     */
    public function deleteQuickResponse(DeleteQuickResponseRequest $args)
    {
        $result = parent::deleteQuickResponse($args->toArray());
        return new DeleteQuickResponseResponse($result->toArray());
    }
}
