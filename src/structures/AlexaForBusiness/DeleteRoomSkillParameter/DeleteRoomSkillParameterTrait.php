<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteRoomSkillParameter;

trait DeleteRoomSkillParameterTrait
{
    /**
     * @param DeleteRoomSkillParameterRequest $args
     * @return DeleteRoomSkillParameterResponse
     */
    public function deleteRoomSkillParameter(DeleteRoomSkillParameterRequest $args)
    {
        $result = parent::deleteRoomSkillParameter($args->toArray());
        return new DeleteRoomSkillParameterResponse($result->toArray());
    }
}
