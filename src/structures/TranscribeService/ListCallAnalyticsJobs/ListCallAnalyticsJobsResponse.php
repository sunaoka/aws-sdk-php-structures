<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $Status
 * @property string|null $NextToken
 * @property list<Shapes\CallAnalyticsJobSummary>|null $CallAnalyticsJobSummaries
 */
class ListCallAnalyticsJobsResponse extends Response
{
}
