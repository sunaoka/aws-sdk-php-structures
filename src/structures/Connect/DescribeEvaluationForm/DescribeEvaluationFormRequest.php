<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationFormId
 * @property int<1, max> $EvaluationFormVersion
 */
class DescribeEvaluationFormRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationFormId: string,
     *     EvaluationFormVersion?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
