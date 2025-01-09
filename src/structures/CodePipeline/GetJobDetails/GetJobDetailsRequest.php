<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class GetJobDetailsRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
