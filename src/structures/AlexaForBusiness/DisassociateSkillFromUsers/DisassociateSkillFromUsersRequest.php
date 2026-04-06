<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateSkillFromUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SkillId
 */
class DisassociateSkillFromUsersRequest extends Request
{
    /**
     * @param array{SkillId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
