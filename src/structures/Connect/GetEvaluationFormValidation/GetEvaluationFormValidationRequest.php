<?php

namespace Sunaoka\Aws\Structures\Connect\GetEvaluationFormValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int|null $EvaluationFormVersion
 */
class GetEvaluationFormValidationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     EvaluationFormVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
