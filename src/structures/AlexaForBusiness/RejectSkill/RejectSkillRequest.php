<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\RejectSkill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SkillId
 */
class RejectSkillRequest extends Request
{
    /**
     * @param array{SkillId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
