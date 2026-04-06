<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateSkillGroupFromRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 * @property string|null $RoomArn
 */
class DisassociateSkillGroupFromRoomRequest extends Request
{
    /**
     * @param array{
     *     SkillGroupArn?: string|null,
     *     RoomArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
