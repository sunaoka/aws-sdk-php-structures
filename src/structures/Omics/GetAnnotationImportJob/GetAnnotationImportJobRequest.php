<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class GetAnnotationImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
