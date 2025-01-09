<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $NextToken
 * @property list<Shapes\CallAnalyticsJobSummary> $CallAnalyticsJobSummaries
 */
class ListCallAnalyticsJobsResponse extends Response
{
}
