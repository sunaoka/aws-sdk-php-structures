<?php

namespace Sunaoka\Aws\Structures\Glue\GetTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DatabaseName
 * @property string $Description
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property \Aws\Api\DateTimeResult $LastAccessTime
 * @property \Aws\Api\DateTimeResult $LastAnalyzedTime
 * @property int $Retention
 * @property StorageDescriptor $StorageDescriptor
 * @property list<Column> $PartitionKeys
 * @property string $ViewOriginalText
 * @property string $ViewExpandedText
 * @property string $TableType
 * @property array<string, string> $Parameters
 * @property string $CreatedBy
 * @property bool $IsRegisteredWithLakeFormation
 * @property TableIdentifier $TargetTable
 * @property string $CatalogId
 * @property string $VersionId
 * @property FederatedTable $FederatedTable
 * @property ViewDefinition $ViewDefinition
 * @property bool $IsMultiDialectView
 * @property TableStatus $Status
 */
class Table extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DatabaseName?: string,
     *     Description?: string,
     *     Owner?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     LastAccessTime?: \Aws\Api\DateTimeResult,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult,
     *     Retention?: int,
     *     StorageDescriptor?: StorageDescriptor,
     *     PartitionKeys?: list<Column>,
     *     ViewOriginalText?: string,
     *     ViewExpandedText?: string,
     *     TableType?: string,
     *     Parameters?: array<string, string>,
     *     CreatedBy?: string,
     *     IsRegisteredWithLakeFormation?: bool,
     *     TargetTable?: TableIdentifier,
     *     CatalogId?: string,
     *     VersionId?: string,
     *     FederatedTable?: FederatedTable,
     *     ViewDefinition?: ViewDefinition,
     *     IsMultiDialectView?: bool,
     *     Status?: TableStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
