<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation;

trait UpdateSourceLocationTrait
{
    /**
     * @param UpdateSourceLocationRequest $args
     * @return UpdateSourceLocationResponse
     */
    public function updateSourceLocation(UpdateSourceLocationRequest $args)
    {
        $result = parent::updateSourceLocation($args->toArray());
        return new UpdateSourceLocationResponse($result->toArray());
    }
}
