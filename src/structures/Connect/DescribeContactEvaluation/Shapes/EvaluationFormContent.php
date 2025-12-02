<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EvaluationFormVersion
 * @property string $EvaluationFormId
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property string|null $Description
 * @property list<EvaluationFormItem> $Items
 * @property EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property EvaluationFormAutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 * @property EvaluationFormTargetConfiguration|null $TargetConfiguration
 * @property EvaluationFormLanguageConfiguration|null $LanguageConfiguration
 */
class EvaluationFormContent extends Shape
{
    /**
     * @param array{
     *     EvaluationFormVersion: int,
     *     EvaluationFormId: string,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     Description?: string|null,
     *     Items: list<EvaluationFormItem>,
     *     ScoringStrategy?: EvaluationFormScoringStrategy|null,
     *     AutoEvaluationConfiguration?: EvaluationFormAutoEvaluationConfiguration|null,
     *     TargetConfiguration?: EvaluationFormTargetConfiguration|null,
     *     LanguageConfiguration?: EvaluationFormLanguageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
