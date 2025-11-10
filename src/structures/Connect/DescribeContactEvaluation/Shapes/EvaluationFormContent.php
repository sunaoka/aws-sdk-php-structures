<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $EvaluationFormVersion
 * @property string $EvaluationFormId
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property string|null $Description
 * @property list<EvaluationFormItem> $Items
 * @property EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property EvaluationFormAutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 */
class EvaluationFormContent extends Shape
{
    /**
     * @param array{
     *     EvaluationFormVersion: int<1, max>,
     *     EvaluationFormId: string,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     Description?: string|null,
     *     Items: list<EvaluationFormItem>,
     *     ScoringStrategy?: EvaluationFormScoringStrategy|null,
     *     AutoEvaluationConfiguration?: EvaluationFormAutoEvaluationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
