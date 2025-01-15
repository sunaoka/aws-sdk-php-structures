<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property string $WorkflowId
 * @property list<Shapes\ListedExecution> $Executions
 */
class ListExecutionsResponse extends Response
{
}
