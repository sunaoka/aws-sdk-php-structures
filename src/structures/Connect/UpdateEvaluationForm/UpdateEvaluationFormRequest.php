<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int<1, max> $EvaluationFormVersion
 * @property bool|null $CreateNewVersion
 * @property string $Title
 * @property string|null $Description
 * @property list<Shapes\EvaluationFormItem> $Items
 * @property Shapes\EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property Shapes\EvaluationFormAutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 * @property string|null $ClientToken
 */
class UpdateEvaluationFormRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     EvaluationFormVersion: int<1, max>,
     *     CreateNewVersion?: bool|null,
     *     Title: string,
     *     Description?: string|null,
     *     Items: list<Shapes\EvaluationFormItem>,
     *     ScoringStrategy?: Shapes\EvaluationFormScoringStrategy|null,
     *     AutoEvaluationConfiguration?: Shapes\EvaluationFormAutoEvaluationConfiguration|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
