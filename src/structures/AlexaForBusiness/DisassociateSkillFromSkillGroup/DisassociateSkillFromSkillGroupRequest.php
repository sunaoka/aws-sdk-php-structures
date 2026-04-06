<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateSkillFromSkillGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 * @property string $SkillId
 */
class DisassociateSkillFromSkillGroupRequest extends Request
{
    /**
     * @param array{
     *     SkillGroupArn?: string|null,
     *     SkillId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
