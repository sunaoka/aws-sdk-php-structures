<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutSkillAuthorization;

trait PutSkillAuthorizationTrait
{
    /**
     * @param PutSkillAuthorizationRequest $args
     * @return PutSkillAuthorizationResponse
     */
    public function putSkillAuthorization(PutSkillAuthorizationRequest $args)
    {
        $result = parent::putSkillAuthorization($args->toArray());
        return new PutSkillAuthorizationResponse($result->toArray());
    }
}
