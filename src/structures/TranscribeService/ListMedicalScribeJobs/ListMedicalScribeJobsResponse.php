<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalScribeJobs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $Status
 * @property string|null $NextToken
 * @property list<Shapes\MedicalScribeJobSummary>|null $MedicalScribeJobSummaries
 */
class ListMedicalScribeJobsResponse extends Response
{
}
