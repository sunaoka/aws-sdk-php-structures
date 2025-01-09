<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeBulkImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class DescribeBulkImportJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
