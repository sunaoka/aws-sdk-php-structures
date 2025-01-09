<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionActivityMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyActivityId
 * @property string $JourneyId
 * @property string $NextToken
 * @property string $PageSize
 */
class GetJourneyExecutionActivityMetricsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyActivityId: string,
     *     JourneyId: string,
     *     NextToken?: string,
     *     PageSize?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
