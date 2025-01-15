<?php

namespace Sunaoka\Aws\Structures\XRay\BatchGetTraces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Trace>|null $Traces
 * @property list<string>|null $UnprocessedTraceIds
 * @property string|null $NextToken
 */
class BatchGetTracesResponse extends Response
{
}
