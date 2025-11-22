<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<list<Shapes\Field>> $Records
 * @property list<Shapes\ColumnMetadata>|null $ColumnMetadata
 * @property int|null $TotalNumRows
 * @property string|null $NextToken
 */
class GetStatementResultResponse extends Response
{
}
