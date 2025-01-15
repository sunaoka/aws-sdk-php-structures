<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property list<string>|null $SelectedChoiceIds
 */
class ProfileQuestionUpdate extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     SelectedChoiceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
