<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $EvaluationFormId
 * @property Shapes\AutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class StartContactEvaluationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     EvaluationFormId: string,
     *     AutoEvaluationConfiguration?: Shapes\AutoEvaluationConfiguration|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
