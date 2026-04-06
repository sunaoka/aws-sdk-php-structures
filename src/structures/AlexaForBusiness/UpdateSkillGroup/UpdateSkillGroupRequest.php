<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateSkillGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 * @property string|null $SkillGroupName
 * @property string|null $Description
 */
class UpdateSkillGroupRequest extends Request
{
    /**
     * @param array{
     *     SkillGroupArn?: string|null,
     *     SkillGroupName?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
