<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class GetPolicyPreviewJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
