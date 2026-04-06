<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

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
 * @property CatalogConfiguration|null $CatalogConfiguration
 * @property S3DestinationConfiguration|null $S3Configuration
 */
class IcebergDestinationUpdate extends Shape
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
     *     CatalogConfiguration?: CatalogConfiguration|null,
     *     S3Configuration?: S3DestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
