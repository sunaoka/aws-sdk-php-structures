<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Title
 * @property string|null $Description
 * @property list<Shapes\EvaluationFormItem> $Items
 * @property Shapes\EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property string|null $ClientToken
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
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
