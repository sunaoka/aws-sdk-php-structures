<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDesignation;

trait GetDesignationTrait
{
    /**
     * @param GetDesignationRequest $args
     * @return GetDesignationResponse
     */
    public function getDesignation(GetDesignationRequest $args)
    {
        $result = parent::getDesignation($args->toArray());
        return new GetDesignationResponse($result->toArray());
    }
}
