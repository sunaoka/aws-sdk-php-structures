<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ColumnMetadata>|null $ColumnMetadata
 * @property string|null $NextToken
 * @property list<Shapes\QueryRecords> $Records
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property int|null $TotalNumRows
 */
class GetStatementResultV2Response extends Response
{
}
