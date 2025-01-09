<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Table $Table
 * @property list<string> $AuthorizedColumns
 * @property bool $IsRegisteredWithLakeFormation
 * @property list<Shapes\ColumnRowFilter> $CellFilters
 * @property string $QueryAuthorizationId
 * @property bool $IsMultiDialectView
 * @property string $ResourceArn
 * @property bool $IsProtected
 * @property list<'ALL'|'SELECT'|'ALTER'|'DROP'|'DELETE'|'INSERT'|'CREATE_DATABASE'|'CREATE_TABLE'|'DATA_LOCATION_ACCESS'> $Permissions
 * @property string $RowFilter
 */
class GetUnfilteredTableMetadataResponse extends Response
{
}
