<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $NextToken
 * @property list<Shapes\TableOptimizerRun> $TableOptimizerRuns
 */
class ListTableOptimizerRunsResponse extends Response
{
}
