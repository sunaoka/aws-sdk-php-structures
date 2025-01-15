<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalTranscriptionJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $Status
 * @property string|null $NextToken
 * @property list<Shapes\MedicalTranscriptionJobSummary>|null $MedicalTranscriptionJobSummaries
 */
class ListMedicalTranscriptionJobsResponse extends Response
{
}
