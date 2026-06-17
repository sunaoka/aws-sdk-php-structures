<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteSecurityRequirementPack;

trait DeleteSecurityRequirementPackTrait
{
    /**
     * @param DeleteSecurityRequirementPackRequest $args
     * @return DeleteSecurityRequirementPackResponse
     */
    public function deleteSecurityRequirementPack(DeleteSecurityRequirementPackRequest $args)
    {
        $result = parent::deleteSecurityRequirementPack($args->toArray());
        return new DeleteSecurityRequirementPackResponse($result->toArray());
    }
}
