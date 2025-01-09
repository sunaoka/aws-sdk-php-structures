<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SessionId
 * @property string $NextToken
 * @property list<Shapes\ExecutorsSummary> $ExecutorsSummary
 */
class ListExecutorsResponse extends Response
{
}
