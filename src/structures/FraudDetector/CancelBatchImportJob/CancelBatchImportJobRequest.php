<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CancelBatchImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class CancelBatchImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
