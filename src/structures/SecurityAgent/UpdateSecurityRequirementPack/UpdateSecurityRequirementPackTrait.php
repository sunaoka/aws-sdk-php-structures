<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateSecurityRequirementPack;

trait UpdateSecurityRequirementPackTrait
{
    /**
     * @param UpdateSecurityRequirementPackRequest $args
     * @return UpdateSecurityRequirementPackResponse
     */
    public function updateSecurityRequirementPack(UpdateSecurityRequirementPackRequest $args)
    {
        $result = parent::updateSecurityRequirementPack($args->toArray());
        return new UpdateSecurityRequirementPackResponse($result->toArray());
    }
}
