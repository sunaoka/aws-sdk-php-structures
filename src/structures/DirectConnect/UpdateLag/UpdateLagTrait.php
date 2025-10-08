<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateLag;

trait UpdateLagTrait
{
    /**
     * @param UpdateLagRequest $args
     * @return UpdateLagResponse
     */
    public function updateLag(UpdateLagRequest $args)
    {
        $result = parent::updateLag($args->toArray());
        return new UpdateLagResponse($result->toArray());
    }
}
