<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutRoomSkillParameter;

trait PutRoomSkillParameterTrait
{
    /**
     * @param PutRoomSkillParameterRequest $args
     * @return PutRoomSkillParameterResponse
     */
    public function putRoomSkillParameter(PutRoomSkillParameterRequest $args)
    {
        $result = parent::putRoomSkillParameter($args->toArray());
        return new PutRoomSkillParameterResponse($result->toArray());
    }
}
