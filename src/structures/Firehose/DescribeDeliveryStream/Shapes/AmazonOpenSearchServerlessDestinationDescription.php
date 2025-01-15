<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $CollectionEndpoint
 * @property string|null $IndexName
 * @property AmazonOpenSearchServerlessBufferingHints|null $BufferingHints
 * @property AmazonOpenSearchServerlessRetryOptions|null $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments'|null $S3BackupMode
 * @property S3DestinationDescription|null $S3DestinationDescription
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property VpcConfigurationDescription|null $VpcConfigurationDescription
 */
class AmazonOpenSearchServerlessDestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     CollectionEndpoint?: string|null,
     *     IndexName?: string|null,
     *     BufferingHints?: AmazonOpenSearchServerlessBufferingHints|null,
     *     RetryOptions?: AmazonOpenSearchServerlessRetryOptions|null,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments'|null,
     *     S3DestinationDescription?: S3DestinationDescription|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     VpcConfigurationDescription?: VpcConfigurationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
