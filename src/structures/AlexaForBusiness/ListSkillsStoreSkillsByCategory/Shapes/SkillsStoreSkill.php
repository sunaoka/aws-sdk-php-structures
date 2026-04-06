<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreSkillsByCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SkillId
 * @property string|null $SkillName
 * @property string|null $ShortDescription
 * @property string|null $IconUrl
 * @property list<string>|null $SampleUtterances
 * @property SkillDetails|null $SkillDetails
 * @property bool|null $SupportsLinking
 */
class SkillsStoreSkill extends Shape
{
    /**
     * @param array{
     *     SkillId?: string|null,
     *     SkillName?: string|null,
     *     ShortDescription?: string|null,
     *     IconUrl?: string|null,
     *     SampleUtterances?: list<string>|null,
     *     SkillDetails?: SkillDetails|null,
     *     SupportsLinking?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
