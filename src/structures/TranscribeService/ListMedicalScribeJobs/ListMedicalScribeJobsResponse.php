<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalScribeJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $NextToken
 * @property list<Shapes\MedicalScribeJobSummary> $MedicalScribeJobSummaries
 */
class ListMedicalScribeJobsResponse extends Response
{
}
