<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ApproveSkill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SkillId
 */
class ApproveSkillRequest extends Request
{
    /**
     * @param array{SkillId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
