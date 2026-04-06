<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $LastAccessTime
 * @property \Aws\Api\DateTimeResult|null $LastAnalyzedTime
 * @property int<0, max>|null $Retention
 * @property StorageDescriptor|null $StorageDescriptor
 * @property list<Column>|null $PartitionKeys
 * @property string|null $ViewOriginalText
 * @property string|null $ViewExpandedText
 * @property string|null $TableType
 * @property array<string, string>|null $Parameters
 * @property TableIdentifier|null $TargetTable
 * @property ViewDefinitionInput|null $ViewDefinition
 */
class TableInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Owner?: string|null,
     *     LastAccessTime?: \Aws\Api\DateTimeResult|null,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult|null,
     *     Retention?: int<0, max>|null,
     *     StorageDescriptor?: StorageDescriptor|null,
     *     PartitionKeys?: list<Column>|null,
     *     ViewOriginalText?: string|null,
     *     ViewExpandedText?: string|null,
     *     TableType?: string|null,
     *     Parameters?: array<string, string>|null,
     *     TargetTable?: TableIdentifier|null,
     *     ViewDefinition?: ViewDefinitionInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
