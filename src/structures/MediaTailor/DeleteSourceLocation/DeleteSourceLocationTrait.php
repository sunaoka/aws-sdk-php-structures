<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteSourceLocation;

trait DeleteSourceLocationTrait
{
    /**
     * @param DeleteSourceLocationRequest $args
     * @return DeleteSourceLocationResponse
     */
    public function deleteSourceLocation(DeleteSourceLocationRequest $args)
    {
        $result = parent::deleteSourceLocation($args->toArray());
        return new DeleteSourceLocationResponse($result->toArray());
    }
}
