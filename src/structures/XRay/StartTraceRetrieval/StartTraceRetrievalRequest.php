<?php

namespace Sunaoka\Aws\Structures\XRay\StartTraceRetrieval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TraceIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class StartTraceRetrievalRequest extends Request
{
    /**
     * @param array{
     *     TraceIds: list<string>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
