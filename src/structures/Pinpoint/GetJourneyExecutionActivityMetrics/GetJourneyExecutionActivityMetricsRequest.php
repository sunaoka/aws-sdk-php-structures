<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionActivityMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyActivityId
 * @property string $JourneyId
 * @property string|null $NextToken
 * @property string|null $PageSize
 */
class GetJourneyExecutionActivityMetricsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyActivityId: string,
     *     JourneyId: string,
     *     NextToken?: string|null,
     *     PageSize?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
