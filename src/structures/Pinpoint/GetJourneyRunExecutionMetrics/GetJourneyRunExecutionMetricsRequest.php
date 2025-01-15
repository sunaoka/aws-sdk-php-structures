<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string|null $NextToken
 * @property string|null $PageSize
 * @property string $RunId
 */
class GetJourneyRunExecutionMetricsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string,
     *     NextToken?: string|null,
     *     PageSize?: string|null,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
