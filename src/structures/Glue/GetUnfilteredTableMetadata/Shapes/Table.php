<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $DatabaseName
 * @property string|null $Description
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property \Aws\Api\DateTimeResult|null $LastAccessTime
 * @property \Aws\Api\DateTimeResult|null $LastAnalyzedTime
 * @property int<0, max>|null $Retention
 * @property StorageDescriptor|null $StorageDescriptor
 * @property list<Column>|null $PartitionKeys
 * @property string|null $ViewOriginalText
 * @property string|null $ViewExpandedText
 * @property string|null $TableType
 * @property array<string, string>|null $Parameters
 * @property string|null $CreatedBy
 * @property bool|null $IsRegisteredWithLakeFormation
 * @property TableIdentifier|null $TargetTable
 * @property string|null $CatalogId
 * @property string|null $VersionId
 * @property FederatedTable|null $FederatedTable
 * @property ViewDefinition|null $ViewDefinition
 * @property bool|null $IsMultiDialectView
 * @property TableStatus|null $Status
 */
class Table extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DatabaseName?: string|null,
     *     Description?: string|null,
     *     Owner?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     LastAccessTime?: \Aws\Api\DateTimeResult|null,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult|null,
     *     Retention?: int<0, max>|null,
     *     StorageDescriptor?: StorageDescriptor|null,
     *     PartitionKeys?: list<Column>|null,
     *     ViewOriginalText?: string|null,
     *     ViewExpandedText?: string|null,
     *     TableType?: string|null,
     *     Parameters?: array<string, string>|null,
     *     CreatedBy?: string|null,
     *     IsRegisteredWithLakeFormation?: bool|null,
     *     TargetTable?: TableIdentifier|null,
     *     CatalogId?: string|null,
     *     VersionId?: string|null,
     *     FederatedTable?: FederatedTable|null,
     *     ViewDefinition?: ViewDefinition|null,
     *     IsMultiDialectView?: bool|null,
     *     Status?: TableStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
