<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $details
 * @property list<Shapes\ExperimentReport>|null $reports
 * @property list<Shapes\ExperimentResultsData>|null $resultsData
 * @property list<\Aws\Api\DateTimeResult>|null $timestamps
 */
class GetExperimentResultsResponse extends Response
{
}
