<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDesignation;

trait CreateDesignationTrait
{
    /**
     * @param CreateDesignationRequest $args
     * @return CreateDesignationResponse
     */
    public function createDesignation(CreateDesignationRequest $args)
    {
        $result = parent::createDesignation($args->toArray());
        return new CreateDesignationResponse($result->toArray());
    }
}
