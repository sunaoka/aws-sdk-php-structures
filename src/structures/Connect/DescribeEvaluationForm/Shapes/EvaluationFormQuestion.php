<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string|null $Instructions
 * @property string $RefId
 * @property bool|null $NotApplicableEnabled
 * @property 'TEXT'|'SINGLESELECT'|'NUMERIC'|'MULTISELECT'|'DATETIME' $QuestionType
 * @property EvaluationFormQuestionTypeProperties|null $QuestionTypeProperties
 * @property EvaluationFormItemEnablementConfiguration|null $Enablement
 * @property double|null $Weight
 */
class EvaluationFormQuestion extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     Instructions?: string|null,
     *     RefId: string,
     *     NotApplicableEnabled?: bool|null,
     *     QuestionType: 'TEXT'|'SINGLESELECT'|'NUMERIC'|'MULTISELECT'|'DATETIME',
     *     QuestionTypeProperties?: EvaluationFormQuestionTypeProperties|null,
     *     Enablement?: EvaluationFormItemEnablementConfiguration|null,
     *     Weight?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
