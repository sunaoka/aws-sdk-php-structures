<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateAccess;

trait UpdateAccessTrait
{
    /**
     * @param UpdateAccessRequest $args
     * @return UpdateAccessResponse
     */
    public function updateAccess(UpdateAccessRequest $args)
    {
        $result = parent::updateAccess($args->toArray());
        return new UpdateAccessResponse($result->toArray());
    }
}
