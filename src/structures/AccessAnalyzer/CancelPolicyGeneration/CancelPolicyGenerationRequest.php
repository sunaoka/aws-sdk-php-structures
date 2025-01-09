<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CancelPolicyGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class CancelPolicyGenerationRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
