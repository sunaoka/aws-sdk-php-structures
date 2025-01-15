<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SessionId
 * @property string|null $NextToken
 * @property list<Shapes\ExecutorsSummary>|null $ExecutorsSummary
 */
class ListExecutorsResponse extends Response
{
}
