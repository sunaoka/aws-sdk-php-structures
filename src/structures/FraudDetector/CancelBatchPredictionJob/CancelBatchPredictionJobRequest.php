<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CancelBatchPredictionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class CancelBatchPredictionJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
