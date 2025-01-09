<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteBatchImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class DeleteBatchImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
