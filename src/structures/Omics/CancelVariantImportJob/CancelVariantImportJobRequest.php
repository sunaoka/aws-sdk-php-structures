<?php

namespace Sunaoka\Aws\Structures\Omics\CancelVariantImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class CancelVariantImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
