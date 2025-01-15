<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\StepSearchSummary> $steps
 * @property int<0, 10000>|null $nextItemOffset
 * @property int<0, 10000> $totalResults
 */
class SearchStepsResponse extends Response
{
}
