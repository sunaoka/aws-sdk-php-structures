<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $Instructions
 * @property string $RefId
 * @property bool $NotApplicableEnabled
 * @property 'TEXT'|'SINGLESELECT'|'NUMERIC' $QuestionType
 * @property EvaluationFormQuestionTypeProperties $QuestionTypeProperties
 * @property double $Weight
 */
class EvaluationFormQuestion extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     Instructions?: string,
     *     RefId: string,
     *     NotApplicableEnabled?: bool,
     *     QuestionType: 'TEXT'|'SINGLESELECT'|'NUMERIC',
     *     QuestionTypeProperties?: EvaluationFormQuestionTypeProperties,
     *     Weight?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
