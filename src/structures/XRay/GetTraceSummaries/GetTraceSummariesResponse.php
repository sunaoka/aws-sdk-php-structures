<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TraceSummary> $TraceSummaries
 * @property \Aws\Api\DateTimeResult $ApproximateTime
 * @property int $TracesProcessedCount
 * @property string $NextToken
 */
class GetTraceSummariesResponse extends Response
{
}
