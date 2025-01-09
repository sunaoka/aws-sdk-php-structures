<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $details
 * @property list<Shapes\ExperimentReport> $reports
 * @property list<Shapes\ExperimentResultsData> $resultsData
 * @property list<\Aws\Api\DateTimeResult> $timestamps
 */
class GetExperimentResultsResponse extends Response
{
}
