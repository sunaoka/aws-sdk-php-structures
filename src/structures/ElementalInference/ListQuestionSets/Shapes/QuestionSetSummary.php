<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListQuestionSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string|null $latestVersion
 */
class QuestionSetSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     latestVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
