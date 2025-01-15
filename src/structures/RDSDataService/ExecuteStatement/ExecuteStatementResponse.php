<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<list<Shapes\Field>>|null $records
 * @property list<Shapes\ColumnMetadata>|null $columnMetadata
 * @property int|null $numberOfRecordsUpdated
 * @property list<Shapes\Field>|null $generatedFields
 * @property string|null $formattedRecords
 */
class ExecuteStatementResponse extends Response
{
}
