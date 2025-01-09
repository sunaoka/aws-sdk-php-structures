<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ColumnMetadata> $ColumnMetadata
 * @property string $NextToken
 * @property list<list<Shapes\Field>> $Records
 * @property int $TotalNumRows
 */
class GetStatementResultResponse extends Response
{
}
