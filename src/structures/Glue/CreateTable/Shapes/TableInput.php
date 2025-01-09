<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $LastAccessTime
 * @property \Aws\Api\DateTimeResult $LastAnalyzedTime
 * @property int<0, max> $Retention
 * @property StorageDescriptor $StorageDescriptor
 * @property list<Column> $PartitionKeys
 * @property string $ViewOriginalText
 * @property string $ViewExpandedText
 * @property string $TableType
 * @property array<string, string> $Parameters
 * @property TableIdentifier $TargetTable
 * @property ViewDefinitionInput $ViewDefinition
 */
class TableInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Owner?: string,
     *     LastAccessTime?: \Aws\Api\DateTimeResult,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult,
     *     Retention?: int<0, max>,
     *     StorageDescriptor?: StorageDescriptor,
     *     PartitionKeys?: list<Column>,
     *     ViewOriginalText?: string,
     *     ViewExpandedText?: string,
     *     TableType?: string,
     *     Parameters?: array<string, string>,
     *     TargetTable?: TableIdentifier,
     *     ViewDefinition?: ViewDefinitionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
