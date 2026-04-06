<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteRoomSkillParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RoomArn
 * @property string $SkillId
 * @property string $ParameterKey
 */
class DeleteRoomSkillParameterRequest extends Request
{
    /**
     * @param array{
     *     RoomArn?: string|null,
     *     SkillId: string,
     *     ParameterKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
