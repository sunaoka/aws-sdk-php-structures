<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetSecurityRequirementPack;

trait GetSecurityRequirementPackTrait
{
    /**
     * @param GetSecurityRequirementPackRequest $args
     * @return GetSecurityRequirementPackResponse
     */
    public function getSecurityRequirementPack(GetSecurityRequirementPackRequest $args)
    {
        $result = parent::getSecurityRequirementPack($args->toArray());
        return new GetSecurityRequirementPackResponse($result->toArray());
    }
}
