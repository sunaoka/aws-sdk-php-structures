<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateType;

trait UpdateTypeTrait
{
    /**
     * @param UpdateTypeRequest $args
     * @return UpdateTypeResponse
     */
    public function updateType(UpdateTypeRequest $args)
    {
        $result = parent::updateType($args->toArray());
        return new UpdateTypeResponse($result->toArray());
    }
}
