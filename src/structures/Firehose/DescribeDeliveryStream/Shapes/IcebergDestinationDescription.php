<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DestinationTableConfiguration>|null $DestinationTableConfigurationList
 * @property SchemaEvolutionConfiguration|null $SchemaEvolutionConfiguration
 * @property TableCreationConfiguration|null $TableCreationConfiguration
 * @property BufferingHints|null $BufferingHints
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property RetryOptions|null $RetryOptions
 * @property string|null $RoleARN
 * @property bool|null $AppendOnly
 * @property CatalogConfiguration|null $CatalogConfiguration
 * @property S3DestinationDescription|null $S3DestinationDescription
 */
class IcebergDestinationDescription extends Shape
{
    /**
     * @param array{
     *     DestinationTableConfigurationList?: list<DestinationTableConfiguration>|null,
     *     SchemaEvolutionConfiguration?: SchemaEvolutionConfiguration|null,
     *     TableCreationConfiguration?: TableCreationConfiguration|null,
     *     BufferingHints?: BufferingHints|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     RetryOptions?: RetryOptions|null,
     *     RoleARN?: string|null,
     *     AppendOnly?: bool|null,
     *     CatalogConfiguration?: CatalogConfiguration|null,
     *     S3DestinationDescription?: S3DestinationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
