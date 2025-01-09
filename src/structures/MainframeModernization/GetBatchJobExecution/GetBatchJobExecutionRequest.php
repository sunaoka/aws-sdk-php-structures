<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetBatchJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $executionId
 */
class GetBatchJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     executionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
