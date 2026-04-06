<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependencies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\ServiceDependency> $ServiceDependencies
 * @property string|null $NextToken
 */
class ListServiceDependenciesResponse extends Response
{
}
