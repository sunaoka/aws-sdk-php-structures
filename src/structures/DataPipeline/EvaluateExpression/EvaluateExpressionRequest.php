<?php

namespace Sunaoka\Aws\Structures\DataPipeline\EvaluateExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property string $objectId
 * @property string $expression
 */
class EvaluateExpressionRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     objectId: string,
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
