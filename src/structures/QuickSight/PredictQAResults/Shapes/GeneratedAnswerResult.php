<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionText
 * @property 'ANSWER_GENERATED'|'ANSWER_RETRIEVED'|'ANSWER_DOWNGRADE'|null $AnswerStatus
 * @property string|null $TopicId
 * @property string|null $TopicName
 * @property string|null $Restatement
 * @property string|null $QuestionId
 * @property string|null $AnswerId
 * @property string|null $QuestionUrl
 */
class GeneratedAnswerResult extends Shape
{
    /**
     * @param array{
     *     QuestionText?: string|null,
     *     AnswerStatus?: 'ANSWER_GENERATED'|'ANSWER_RETRIEVED'|'ANSWER_DOWNGRADE'|null,
     *     TopicId?: string|null,
     *     TopicName?: string|null,
     *     Restatement?: string|null,
     *     QuestionId?: string|null,
     *     AnswerId?: string|null,
     *     QuestionUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
