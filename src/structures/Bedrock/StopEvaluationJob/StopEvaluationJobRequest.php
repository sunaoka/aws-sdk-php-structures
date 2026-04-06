<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopEvaluationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobIdentifier
 */
class StopEvaluationJobRequest extends Request
{
    /**
     * @param array{jobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
