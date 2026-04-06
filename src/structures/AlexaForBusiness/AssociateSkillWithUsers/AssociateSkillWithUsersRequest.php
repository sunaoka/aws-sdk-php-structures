<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateSkillWithUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SkillId
 */
class AssociateSkillWithUsersRequest extends Request
{
    /**
     * @param array{SkillId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
