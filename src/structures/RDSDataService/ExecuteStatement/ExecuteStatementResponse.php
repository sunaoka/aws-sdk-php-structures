<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<list<Shapes\Field>> $records
 * @property list<Shapes\ColumnMetadata> $columnMetadata
 * @property int $numberOfRecordsUpdated
 * @property list<Shapes\Field> $generatedFields
 * @property string $formattedRecords
 */
class ExecuteStatementResponse extends Response
{
}
