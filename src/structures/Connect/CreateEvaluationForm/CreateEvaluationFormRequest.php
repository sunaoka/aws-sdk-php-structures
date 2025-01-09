<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Title
 * @property string $Description
 * @property list<Shapes\EvaluationFormItem> $Items
 * @property Shapes\EvaluationFormScoringStrategy $ScoringStrategy
 * @property string $ClientToken
 */
class CreateEvaluationFormRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
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
