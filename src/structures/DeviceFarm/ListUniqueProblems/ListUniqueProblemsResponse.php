<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED', list<Shapes\UniqueProblem>> $uniqueProblems
 * @property string $nextToken
 */
class ListUniqueProblemsResponse extends Response
{
}
