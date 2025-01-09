<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DestinationTableConfiguration> $DestinationTableConfigurationList
 * @property SchemaEvolutionConfiguration $SchemaEvolutionConfiguration
 * @property TableCreationConfiguration $TableCreationConfiguration
 * @property BufferingHints $BufferingHints
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property 'FailedDataOnly'|'AllData' $S3BackupMode
 * @property RetryOptions $RetryOptions
 * @property string $RoleARN
 * @property CatalogConfiguration $CatalogConfiguration
 * @property S3DestinationConfiguration $S3Configuration
 */
class IcebergDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     DestinationTableConfigurationList?: list<DestinationTableConfiguration>,
     *     SchemaEvolutionConfiguration?: SchemaEvolutionConfiguration,
     *     TableCreationConfiguration?: TableCreationConfiguration,
     *     BufferingHints?: BufferingHints,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData',
     *     RetryOptions?: RetryOptions,
     *     RoleARN?: string,
     *     CatalogConfiguration?: CatalogConfiguration,
     *     S3Configuration?: S3DestinationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
