<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteSkillGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 */
class DeleteSkillGroupRequest extends Request
{
    /**
     * @param array{SkillGroupArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
