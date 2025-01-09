<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $QuestionTitle
 * @property string $QuestionDescription
 * @property list<ProfileChoice> $QuestionChoices
 * @property list<string> $SelectedChoiceIds
 * @property int $MinSelectedChoices
 * @property int $MaxSelectedChoices
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
     *     MinSelectedChoices?: int,
     *     MaxSelectedChoices?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
