<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalTranscriptionJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $NextToken
 * @property list<Shapes\MedicalTranscriptionJobSummary> $MedicalTranscriptionJobSummaries
 */
class ListMedicalTranscriptionJobsResponse extends Response
{
}
