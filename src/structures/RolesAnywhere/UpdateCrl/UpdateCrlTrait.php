<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateCrl;

trait UpdateCrlTrait
{
    /**
     * @param UpdateCrlRequest $args
     * @return UpdateCrlResponse
     */
    public function updateCrl(UpdateCrlRequest $args)
    {
        $result = parent::updateCrl($args->toArray());
        return new UpdateCrlResponse($result->toArray());
    }
}
