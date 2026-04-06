<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Table|null $Table
 * @property list<string>|null $AuthorizedColumns
 * @property bool|null $IsRegisteredWithLakeFormation
 * @property list<Shapes\ColumnRowFilter>|null $CellFilters
 */
class GetUnfilteredTableMetadataResponse extends Response
{
}
