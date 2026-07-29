<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $jobId
 */
class DescribeEnrichmentJobRequest extends Request
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
