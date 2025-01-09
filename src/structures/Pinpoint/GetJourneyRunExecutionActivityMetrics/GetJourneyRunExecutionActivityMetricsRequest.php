<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionActivityMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyActivityId
 * @property string $JourneyId
 * @property string $NextToken
 * @property string $PageSize
 * @property string $RunId
 */
class GetJourneyRunExecutionActivityMetricsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyActivityId: string,
     *     JourneyId: string,
     *     NextToken?: string,
     *     PageSize?: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
