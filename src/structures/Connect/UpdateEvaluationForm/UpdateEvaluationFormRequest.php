<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int<1, max> $EvaluationFormVersion
 * @property bool $CreateNewVersion
 * @property string $Title
 * @property string $Description
 * @property list<Shapes\EvaluationFormItem> $Items
 * @property Shapes\EvaluationFormScoringStrategy $ScoringStrategy
 * @property string $ClientToken
 */
class UpdateEvaluationFormRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     EvaluationFormVersion: int<1, max>,
     *     CreateNewVersion?: bool,
     *     Title: string,
     *     Description?: string,
     *     Items: list<Shapes\EvaluationFormItem>,
     *     ScoringStrategy?: Shapes\EvaluationFormScoringStrategy,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
