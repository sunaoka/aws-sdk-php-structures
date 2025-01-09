<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property list<string> $SelectedChoiceIds
 */
class ProfileQuestionUpdate extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     SelectedChoiceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
