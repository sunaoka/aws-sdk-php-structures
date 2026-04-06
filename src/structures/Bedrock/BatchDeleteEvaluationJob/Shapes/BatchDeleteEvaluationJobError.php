<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobIdentifier
 * @property string $code
 * @property string|null $message
 */
class BatchDeleteEvaluationJobError extends Shape
{
    /**
     * @param array{
     *     jobIdentifier: string,
     *     code: string,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
