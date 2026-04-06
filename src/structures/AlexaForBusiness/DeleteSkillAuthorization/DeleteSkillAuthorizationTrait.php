<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteSkillAuthorization;

trait DeleteSkillAuthorizationTrait
{
    /**
     * @param DeleteSkillAuthorizationRequest $args
     * @return DeleteSkillAuthorizationResponse
     */
    public function deleteSkillAuthorization(DeleteSkillAuthorizationRequest $args)
    {
        $result = parent::deleteSkillAuthorization($args->toArray());
        return new DeleteSkillAuthorizationResponse($result->toArray());
    }
}
