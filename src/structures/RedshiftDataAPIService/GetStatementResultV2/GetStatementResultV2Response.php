<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\QueryRecords> $Records
 * @property list<Shapes\ColumnMetadata>|null $ColumnMetadata
 * @property int|null $TotalNumRows
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property string|null $NextToken
 */
class GetStatementResultV2Response extends Response
{
}
