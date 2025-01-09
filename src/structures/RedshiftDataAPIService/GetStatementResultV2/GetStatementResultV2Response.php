<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ColumnMetadata> $ColumnMetadata
 * @property string $NextToken
 * @property list<Shapes\QueryRecords> $Records
 * @property 'JSON'|'CSV' $ResultFormat
 * @property int $TotalNumRows
 */
class GetStatementResultV2Response extends Response
{
}
