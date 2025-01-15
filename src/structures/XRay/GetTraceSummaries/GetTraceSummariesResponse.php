<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TraceSummary>|null $TraceSummaries
 * @property \Aws\Api\DateTimeResult|null $ApproximateTime
 * @property int|null $TracesProcessedCount
 * @property string|null $NextToken
 */
class GetTraceSummariesResponse extends Response
{
}
