<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $CollectionEndpoint
 * @property string $IndexName
 * @property AmazonOpenSearchServerlessBufferingHints $BufferingHints
 * @property AmazonOpenSearchServerlessRetryOptions $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments' $S3BackupMode
 * @property S3DestinationDescription $S3DestinationDescription
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property VpcConfigurationDescription $VpcConfigurationDescription
 */
class AmazonOpenSearchServerlessDestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string,
     *     CollectionEndpoint?: string,
     *     IndexName?: string,
     *     BufferingHints?: AmazonOpenSearchServerlessBufferingHints,
     *     RetryOptions?: AmazonOpenSearchServerlessRetryOptions,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments',
     *     S3DestinationDescription?: S3DestinationDescription,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     VpcConfigurationDescription?: VpcConfigurationDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
