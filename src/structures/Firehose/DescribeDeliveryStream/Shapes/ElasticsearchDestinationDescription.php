<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $DomainARN
 * @property string $ClusterEndpoint
 * @property string $IndexName
 * @property string $TypeName
 * @property 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth' $IndexRotationPeriod
 * @property ElasticsearchBufferingHints $BufferingHints
 * @property ElasticsearchRetryOptions $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments' $S3BackupMode
 * @property S3DestinationDescription $S3DestinationDescription
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property VpcConfigurationDescription $VpcConfigurationDescription
 * @property DocumentIdOptions $DocumentIdOptions
 */
class ElasticsearchDestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string,
     *     DomainARN?: string,
     *     ClusterEndpoint?: string,
     *     IndexName?: string,
     *     TypeName?: string,
     *     IndexRotationPeriod?: 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth',
     *     BufferingHints?: ElasticsearchBufferingHints,
     *     RetryOptions?: ElasticsearchRetryOptions,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments',
     *     S3DestinationDescription?: S3DestinationDescription,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     VpcConfigurationDescription?: VpcConfigurationDescription,
     *     DocumentIdOptions?: DocumentIdOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
