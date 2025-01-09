<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EvaluationFormVersion
 * @property string $EvaluationFormId
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property string $Description
 * @property list<EvaluationFormItem> $Items
 * @property EvaluationFormScoringStrategy $ScoringStrategy
 */
class EvaluationFormContent extends Shape
{
    /**
     * @param array{
     *     EvaluationFormVersion: int,
     *     EvaluationFormId: string,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     Description?: string,
     *     Items: list<EvaluationFormItem>,
     *     ScoringStrategy?: EvaluationFormScoringStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
