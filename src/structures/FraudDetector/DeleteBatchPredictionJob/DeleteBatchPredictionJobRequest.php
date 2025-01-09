<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteBatchPredictionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class DeleteBatchPredictionJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
