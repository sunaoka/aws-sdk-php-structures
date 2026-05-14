<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopAdvancedPromptOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobIdentifier
 */
class StopAdvancedPromptOptimizationJobRequest extends Request
{
    /**
     * @param array{jobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
