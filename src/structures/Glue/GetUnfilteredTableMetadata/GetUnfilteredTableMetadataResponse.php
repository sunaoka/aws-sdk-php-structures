<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Table|null $Table
 * @property list<string>|null $AuthorizedColumns
 * @property bool|null $IsRegisteredWithLakeFormation
 * @property list<Shapes\ColumnRowFilter>|null $CellFilters
 * @property string|null $QueryAuthorizationId
 * @property bool|null $IsMultiDialectView
 * @property bool|null $IsMaterializedView
 * @property string|null $ResourceArn
 * @property bool|null $IsProtected
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'>|null $Permissions
 * @property string|null $RowFilter
 */
class GetUnfilteredTableMetadataResponse extends Response
{
}
