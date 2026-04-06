<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $NextToken
 * @property list<Shapes\TableOptimizerRun>|null $TableOptimizerRuns
 */
class ListTableOptimizerRunsResponse extends Response
{
}
