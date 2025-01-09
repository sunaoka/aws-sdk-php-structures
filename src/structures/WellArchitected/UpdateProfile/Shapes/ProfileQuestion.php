<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $QuestionTitle
 * @property string $QuestionDescription
 * @property list<ProfileChoice> $QuestionChoices
 * @property list<string> $SelectedChoiceIds
 * @property int<0, max> $MinSelectedChoices
 * @property int<0, max> $MaxSelectedChoices
 */
class ProfileQuestion extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     QuestionTitle?: string,
     *     QuestionDescription?: string,
     *     QuestionChoices?: list<ProfileChoice>,
     *     SelectedChoiceIds?: list<string>,
     *     MinSelectedChoices?: int<0, max>,
     *     MaxSelectedChoices?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
