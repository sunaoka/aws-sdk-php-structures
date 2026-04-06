<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateSkillGroupFromRoom;

trait DisassociateSkillGroupFromRoomTrait
{
    /**
     * @param DisassociateSkillGroupFromRoomRequest $args
     * @return DisassociateSkillGroupFromRoomResponse
     */
    public function disassociateSkillGroupFromRoom(DisassociateSkillGroupFromRoomRequest $args)
    {
        $result = parent::disassociateSkillGroupFromRoom($args->toArray());
        return new DisassociateSkillGroupFromRoomResponse($result->toArray());
    }
}
