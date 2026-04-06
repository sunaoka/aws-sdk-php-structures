<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $EvaluationFormId
 * @property string|null $ClientToken
 */
class StartContactEvaluationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     EvaluationFormId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
