<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class GetJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
