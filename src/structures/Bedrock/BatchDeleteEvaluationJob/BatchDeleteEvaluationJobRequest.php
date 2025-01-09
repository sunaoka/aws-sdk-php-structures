<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteEvaluationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobIdentifiers
 */
class BatchDeleteEvaluationJobRequest extends Request
{
    /**
     * @param array{jobIdentifiers: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
