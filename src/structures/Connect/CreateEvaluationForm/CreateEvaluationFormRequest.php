<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Title
 * @property string|null $Description
 * @property list<Shapes\EvaluationFormItem> $Items
 * @property Shapes\EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property Shapes\EvaluationFormAutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 * @property string|null $ClientToken
 * @property bool|null $AsDraft
 * @property array<string, string>|null $Tags
 * @property Shapes\EvaluationReviewConfiguration|null $ReviewConfiguration
 * @property Shapes\EvaluationFormTargetConfiguration|null $TargetConfiguration
 * @property Shapes\EvaluationFormLanguageConfiguration|null $LanguageConfiguration
 */
class CreateEvaluationFormRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Title: string,
     *     Description?: string|null,
     *     Items: list<Shapes\EvaluationFormItem>,
     *     ScoringStrategy?: Shapes\EvaluationFormScoringStrategy|null,
     *     AutoEvaluationConfiguration?: Shapes\EvaluationFormAutoEvaluationConfiguration|null,
     *     ClientToken?: string|null,
     *     AsDraft?: bool|null,
     *     Tags?: array<string, string>|null,
     *     ReviewConfiguration?: Shapes\EvaluationReviewConfiguration|null,
     *     TargetConfiguration?: Shapes\EvaluationFormTargetConfiguration|null,
     *     LanguageConfiguration?: Shapes\EvaluationFormLanguageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
