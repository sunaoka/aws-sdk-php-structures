<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AppendOnly
 * @property Catalog|null $Catalog
 * @property int|null $DataFreshnessInSeconds
 * @property DeadLetterQueueS3 $DeadLetterQueueS3
 * @property list<DestinationTable> $DestinationTableList
 * @property SchemaEvolution $SchemaEvolution
 * @property string $ServiceExecutionRoleArn
 * @property TableCreation $TableCreation
 * @property 'ZSTD'|'SNAPPY'|null $CompressionType
 */
class IcebergDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     AppendOnly: bool,
     *     Catalog?: Catalog|null,
     *     DataFreshnessInSeconds?: int|null,
     *     DeadLetterQueueS3: DeadLetterQueueS3,
     *     DestinationTableList: list<DestinationTable>,
     *     SchemaEvolution: SchemaEvolution,
     *     ServiceExecutionRoleArn: string,
     *     TableCreation: TableCreation,
     *     CompressionType?: 'ZSTD'|'SNAPPY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
