<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Job>|null $Jobs
 * @property string|null $NextToken
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'ERROR'|null $Status
 */
class GetJobsQueryResultsResponse extends Response
{
}
