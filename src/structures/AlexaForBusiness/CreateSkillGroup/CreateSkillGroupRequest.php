<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateSkillGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SkillGroupName
 * @property string|null $Description
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSkillGroupRequest extends Request
{
    /**
     * @param array{
     *     SkillGroupName: string,
     *     Description?: string|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
