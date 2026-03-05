<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $jobId
 */
class GetPatientInsightsJobRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
