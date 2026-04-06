<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetSkillGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SkillGroupArn
 * @property string|null $SkillGroupName
 * @property string|null $Description
 */
class SkillGroup extends Shape
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
