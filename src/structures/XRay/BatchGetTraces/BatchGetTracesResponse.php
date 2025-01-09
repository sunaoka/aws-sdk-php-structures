<?php

namespace Sunaoka\Aws\Structures\XRay\BatchGetTraces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Trace> $Traces
 * @property list<string> $UnprocessedTraceIds
 * @property string $NextToken
 */
class BatchGetTracesResponse extends Response
{
}
