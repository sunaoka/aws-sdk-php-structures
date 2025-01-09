<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartMatchingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 */
class StartMatchingJobRequest extends Request
{
    /**
     * @param array{workflowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
