<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $NextToken
 * @property list<Shapes\TranscriptionJobSummary> $TranscriptionJobSummaries
 */
class ListTranscriptionJobsResponse extends Response
{
}
