<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class GetVariantImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
