<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateSkillGroupWithRoom;

trait AssociateSkillGroupWithRoomTrait
{
    /**
     * @param AssociateSkillGroupWithRoomRequest $args
     * @return AssociateSkillGroupWithRoomResponse
     */
    public function associateSkillGroupWithRoom(AssociateSkillGroupWithRoomRequest $args)
    {
        $result = parent::associateSkillGroupWithRoom($args->toArray());
        return new AssociateSkillGroupWithRoomResponse($result->toArray());
    }
}
