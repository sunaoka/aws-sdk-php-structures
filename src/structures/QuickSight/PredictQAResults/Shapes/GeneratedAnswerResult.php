<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionText
 * @property 'ANSWER_GENERATED'|'ANSWER_RETRIEVED'|'ANSWER_DOWNGRADE' $AnswerStatus
 * @property string $TopicId
 * @property string $TopicName
 * @property string $Restatement
 * @property string $QuestionId
 * @property string $AnswerId
 * @property string $QuestionUrl
 */
class GeneratedAnswerResult extends Shape
{
    /**
     * @param array{
     *     QuestionText?: string,
     *     AnswerStatus?: 'ANSWER_GENERATED'|'ANSWER_RETRIEVED'|'ANSWER_DOWNGRADE',
     *     TopicId?: string,
     *     TopicName?: string,
     *     Restatement?: string,
     *     QuestionId?: string,
     *     AnswerId?: string,
     *     QuestionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
