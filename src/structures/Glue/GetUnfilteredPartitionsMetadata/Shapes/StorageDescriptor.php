<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Column>|null $Columns
 * @property string|null $Location
 * @property list<string>|null $AdditionalLocations
 * @property string|null $InputFormat
 * @property string|null $OutputFormat
 * @property bool|null $Compressed
 * @property int|null $NumberOfBuckets
 * @property SerDeInfo|null $SerdeInfo
 * @property list<string>|null $BucketColumns
 * @property list<Order>|null $SortColumns
 * @property array<string, string>|null $Parameters
 * @property SkewedInfo|null $SkewedInfo
 * @property bool|null $StoredAsSubDirectories
 * @property SchemaReference|null $SchemaReference
 */
class StorageDescriptor extends Shape
{
    /**
     * @param array{
     *     Columns?: list<Column>|null,
     *     Location?: string|null,
     *     AdditionalLocations?: list<string>|null,
     *     InputFormat?: string|null,
     *     OutputFormat?: string|null,
     *     Compressed?: bool|null,
     *     NumberOfBuckets?: int|null,
     *     SerdeInfo?: SerDeInfo|null,
     *     BucketColumns?: list<string>|null,
     *     SortColumns?: list<Order>|null,
     *     Parameters?: array<string, string>|null,
     *     SkewedInfo?: SkewedInfo|null,
     *     StoredAsSubDirectories?: bool|null,
     *     SchemaReference?: SchemaReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
