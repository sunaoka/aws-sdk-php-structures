<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int $EvaluationFormVersion
 * @property bool|null $CreateNewVersion
 * @property string $Title
 * @property string|null $Description
 * @property list<Shapes\EvaluationFormItem> $Items
 * @property Shapes\EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property Shapes\EvaluationFormAutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 * @property bool|null $AsDraft
 * @property string|null $ClientToken
 * @property Shapes\EvaluationFormTargetConfiguration|null $TargetConfiguration
 * @property Shapes\EvaluationFormLanguageConfiguration|null $LanguageConfiguration
 */
class UpdateEvaluationFormRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     EvaluationFormVersion: int,
     *     CreateNewVersion?: bool|null,
     *     Title: string,
     *     Description?: string|null,
     *     Items: list<Shapes\EvaluationFormItem>,
     *     ScoringStrategy?: Shapes\EvaluationFormScoringStrategy|null,
     *     AutoEvaluationConfiguration?: Shapes\EvaluationFormAutoEvaluationConfiguration|null,
     *     AsDraft?: bool|null,
     *     ClientToken?: string|null,
     *     TargetConfiguration?: Shapes\EvaluationFormTargetConfiguration|null,
     *     LanguageConfiguration?: Shapes\EvaluationFormLanguageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
