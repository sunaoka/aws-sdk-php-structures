<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfileTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $QuestionTitle
 * @property string $QuestionDescription
 * @property list<ProfileTemplateChoice> $QuestionChoices
 * @property int $MinSelectedChoices
 * @property int $MaxSelectedChoices
 */
class ProfileTemplateQuestion extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     QuestionTitle?: string,
     *     QuestionDescription?: string,
     *     QuestionChoices?: list<ProfileTemplateChoice>,
     *     MinSelectedChoices?: int,
     *     MaxSelectedChoices?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
