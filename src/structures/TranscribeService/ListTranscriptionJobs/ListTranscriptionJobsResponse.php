<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $Status
 * @property string|null $NextToken
 * @property list<Shapes\TranscriptionJobSummary>|null $TranscriptionJobSummaries
 */
class ListTranscriptionJobsResponse extends Response
{
}
