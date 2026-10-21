<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDesignation;

trait UpdateDesignationTrait
{
    /**
     * @param UpdateDesignationRequest $args
     * @return UpdateDesignationResponse
     */
    public function updateDesignation(UpdateDesignationRequest $args)
    {
        $result = parent::updateDesignation($args->toArray());
        return new UpdateDesignationResponse($result->toArray());
    }
}
