<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetSkillGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 */
class GetSkillGroupRequest extends Request
{
    /**
     * @param array{SkillGroupArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
