<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ColumnMetadata>|null $ColumnMetadata
 * @property string|null $NextToken
 * @property list<list<Shapes\Field>> $Records
 * @property int|null $TotalNumRows
 */
class GetStatementResultResponse extends Response
{
}
