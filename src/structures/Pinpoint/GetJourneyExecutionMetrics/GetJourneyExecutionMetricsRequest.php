<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string|null $NextToken
 * @property string|null $PageSize
 */
class GetJourneyExecutionMetricsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
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
