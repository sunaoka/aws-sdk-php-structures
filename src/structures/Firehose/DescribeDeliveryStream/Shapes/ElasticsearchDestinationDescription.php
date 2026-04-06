<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $DomainARN
 * @property string|null $ClusterEndpoint
 * @property string|null $IndexName
 * @property string|null $TypeName
 * @property 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth'|null $IndexRotationPeriod
 * @property ElasticsearchBufferingHints|null $BufferingHints
 * @property ElasticsearchRetryOptions|null $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments'|null $S3BackupMode
 * @property S3DestinationDescription|null $S3DestinationDescription
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property VpcConfigurationDescription|null $VpcConfigurationDescription
 * @property DocumentIdOptions|null $DocumentIdOptions
 */
class ElasticsearchDestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     DomainARN?: string|null,
     *     ClusterEndpoint?: string|null,
     *     IndexName?: string|null,
     *     TypeName?: string|null,
     *     IndexRotationPeriod?: 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth'|null,
     *     BufferingHints?: ElasticsearchBufferingHints|null,
     *     RetryOptions?: ElasticsearchRetryOptions|null,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments'|null,
     *     S3DestinationDescription?: S3DestinationDescription|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     VpcConfigurationDescription?: VpcConfigurationDescription|null,
     *     DocumentIdOptions?: DocumentIdOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
