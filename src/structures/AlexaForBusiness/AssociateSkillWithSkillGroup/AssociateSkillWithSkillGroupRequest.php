<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateSkillWithSkillGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 * @property string $SkillId
 */
class AssociateSkillWithSkillGroupRequest extends Request
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
