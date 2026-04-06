<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkills;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SkillGroupArn
 * @property 'ENABLED'|'PENDING'|null $EnablementType
 * @property 'PUBLIC'|'PRIVATE'|'ALL'|null $SkillType
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListSkillsRequest extends Request
{
    /**
     * @param array{
     *     SkillGroupArn?: string|null,
     *     EnablementType?: 'ENABLED'|'PENDING'|null,
     *     SkillType?: 'PUBLIC'|'PRIVATE'|'ALL'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
