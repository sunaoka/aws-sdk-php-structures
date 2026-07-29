<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeBulkImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string|null $workspaceName
 */
class DescribeBulkImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     workspaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
