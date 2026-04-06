<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetRoomSkillParameter;

trait GetRoomSkillParameterTrait
{
    /**
     * @param GetRoomSkillParameterRequest $args
     * @return GetRoomSkillParameterResponse
     */
    public function getRoomSkillParameter(GetRoomSkillParameterRequest $args)
    {
        $result = parent::getRoomSkillParameter($args->toArray());
        return new GetRoomSkillParameterResponse($result->toArray());
    }
}
