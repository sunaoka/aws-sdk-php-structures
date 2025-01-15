<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property string|null $QuestionTitle
 * @property string|null $QuestionDescription
 * @property list<ProfileChoice>|null $QuestionChoices
 * @property list<string>|null $SelectedChoiceIds
 * @property int<0, max>|null $MinSelectedChoices
 * @property int<0, max>|null $MaxSelectedChoices
 */
class ProfileQuestion extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     QuestionTitle?: string|null,
     *     QuestionDescription?: string|null,
     *     QuestionChoices?: list<ProfileChoice>|null,
     *     SelectedChoiceIds?: list<string>|null,
     *     MinSelectedChoices?: int<0, max>|null,
     *     MaxSelectedChoices?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
