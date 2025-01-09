<?php

namespace Sunaoka\Aws\Structures\Omics\CancelAnnotationImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class CancelAnnotationImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
