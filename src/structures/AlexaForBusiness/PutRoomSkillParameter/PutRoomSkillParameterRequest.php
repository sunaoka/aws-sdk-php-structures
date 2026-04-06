<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutRoomSkillParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RoomArn
 * @property string $SkillId
 * @property Shapes\RoomSkillParameter $RoomSkillParameter
 */
class PutRoomSkillParameterRequest extends Request
{
    /**
     * @param array{
     *     RoomArn?: string|null,
     *     SkillId: string,
     *     RoomSkillParameter: Shapes\RoomSkillParameter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
