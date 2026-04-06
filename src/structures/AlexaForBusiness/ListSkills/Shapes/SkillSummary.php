<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkills\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SkillId
 * @property string|null $SkillName
 * @property bool|null $SupportsLinking
 * @property 'ENABLED'|'PENDING'|null $EnablementType
 * @property 'PUBLIC'|'PRIVATE'|null $SkillType
 */
class SkillSummary extends Shape
{
    /**
     * @param array{
     *     SkillId?: string|null,
     *     SkillName?: string|null,
     *     SupportsLinking?: bool|null,
     *     EnablementType?: 'ENABLED'|'PENDING'|null,
     *     SkillType?: 'PUBLIC'|'PRIVATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
