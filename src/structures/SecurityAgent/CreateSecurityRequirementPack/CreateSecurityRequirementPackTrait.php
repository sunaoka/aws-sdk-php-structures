<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateSecurityRequirementPack;

trait CreateSecurityRequirementPackTrait
{
    /**
     * @param CreateSecurityRequirementPackRequest $args
     * @return CreateSecurityRequirementPackResponse
     */
    public function createSecurityRequirementPack(CreateSecurityRequirementPackRequest $args)
    {
        $result = parent::createSecurityRequirementPack($args->toArray());
        return new CreateSecurityRequirementPackResponse($result->toArray());
    }
}
