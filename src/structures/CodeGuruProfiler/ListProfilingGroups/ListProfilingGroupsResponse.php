<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<string> $profilingGroupNames
 * @property list<Shapes\ProfilingGroupDescription>|null $profilingGroups
 */
class ListProfilingGroupsResponse extends Response
{
}
