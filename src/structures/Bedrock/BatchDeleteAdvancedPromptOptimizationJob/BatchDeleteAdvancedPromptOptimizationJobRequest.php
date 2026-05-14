<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteAdvancedPromptOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobIdentifiers
 */
class BatchDeleteAdvancedPromptOptimizationJobRequest extends Request
{
    /**
     * @param array{jobIdentifiers: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
