<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAdvancedPromptOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobIdentifier
 */
class GetAdvancedPromptOptimizationJobRequest extends Request
{
    /**
     * @param array{jobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
