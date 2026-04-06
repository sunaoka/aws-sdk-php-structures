<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ResolveRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $SkillId
 */
class ResolveRoomRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     SkillId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
