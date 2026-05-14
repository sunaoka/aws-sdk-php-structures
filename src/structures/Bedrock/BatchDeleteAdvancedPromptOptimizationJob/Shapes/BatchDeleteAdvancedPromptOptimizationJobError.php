<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteAdvancedPromptOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobIdentifier
 * @property string $code
 * @property string|null $message
 */
class BatchDeleteAdvancedPromptOptimizationJobError extends Shape
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
