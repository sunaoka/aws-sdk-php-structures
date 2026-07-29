<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDatasetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $jobId
 */
class DescribeDatasetExportJobRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
