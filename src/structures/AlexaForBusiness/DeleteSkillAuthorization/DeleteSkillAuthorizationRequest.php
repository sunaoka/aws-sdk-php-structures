<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteSkillAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SkillId
 * @property string|null $RoomArn
 */
class DeleteSkillAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     SkillId: string,
     *     RoomArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
