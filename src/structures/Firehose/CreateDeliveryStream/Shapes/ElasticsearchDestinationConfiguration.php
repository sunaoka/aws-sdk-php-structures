<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string|null $DomainARN
 * @property string|null $ClusterEndpoint
 * @property string $IndexName
 * @property string|null $TypeName
 * @property 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth'|null $IndexRotationPeriod
 * @property ElasticsearchBufferingHints|null $BufferingHints
 * @property ElasticsearchRetryOptions|null $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments'|null $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property VpcConfiguration|null $VpcConfiguration
 * @property DocumentIdOptions|null $DocumentIdOptions
 */
class ElasticsearchDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     DomainARN?: string|null,
     *     ClusterEndpoint?: string|null,
     *     IndexName: string,
     *     TypeName?: string|null,
     *     IndexRotationPeriod?: 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth'|null,
     *     BufferingHints?: ElasticsearchBufferingHints|null,
     *     RetryOptions?: ElasticsearchRetryOptions|null,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments'|null,
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     VpcConfiguration?: VpcConfiguration|null,
     *     DocumentIdOptions?: DocumentIdOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
