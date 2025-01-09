<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Column> $Columns
 * @property string $Location
 * @property list<string> $AdditionalLocations
 * @property string $InputFormat
 * @property string $OutputFormat
 * @property bool $Compressed
 * @property int $NumberOfBuckets
 * @property SerDeInfo $SerdeInfo
 * @property list<string> $BucketColumns
 * @property list<Order> $SortColumns
 * @property array<string, string> $Parameters
 * @property SkewedInfo $SkewedInfo
 * @property bool $StoredAsSubDirectories
 * @property SchemaReference $SchemaReference
 */
class StorageDescriptor extends Shape
{
    /**
     * @param array{
     *     Columns?: list<Column>,
     *     Location?: string,
     *     AdditionalLocations?: list<string>,
     *     InputFormat?: string,
     *     OutputFormat?: string,
     *     Compressed?: bool,
     *     NumberOfBuckets?: int,
     *     SerdeInfo?: SerDeInfo,
     *     BucketColumns?: list<string>,
     *     SortColumns?: list<Order>,
     *     Parameters?: array<string, string>,
     *     SkewedInfo?: SkewedInfo,
     *     StoredAsSubDirectories?: bool,
     *     SchemaReference?: SchemaReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
