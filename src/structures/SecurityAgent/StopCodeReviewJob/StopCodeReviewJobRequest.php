<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StopCodeReviewJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $codeReviewJobId
 */
class StopCodeReviewJobRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     codeReviewJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
