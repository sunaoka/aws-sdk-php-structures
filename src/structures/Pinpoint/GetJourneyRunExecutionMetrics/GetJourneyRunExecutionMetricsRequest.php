<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string $NextToken
 * @property string $PageSize
 * @property string $RunId
 */
class GetJourneyRunExecutionMetricsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
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
