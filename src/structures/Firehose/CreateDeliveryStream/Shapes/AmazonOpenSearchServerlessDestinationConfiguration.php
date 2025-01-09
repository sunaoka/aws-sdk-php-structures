<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $CollectionEndpoint
 * @property string $IndexName
 * @property AmazonOpenSearchServerlessBufferingHints $BufferingHints
 * @property AmazonOpenSearchServerlessRetryOptions $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments' $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property VpcConfiguration $VpcConfiguration
 */
class AmazonOpenSearchServerlessDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     CollectionEndpoint?: string,
     *     IndexName: string,
     *     BufferingHints?: AmazonOpenSearchServerlessBufferingHints,
     *     RetryOptions?: AmazonOpenSearchServerlessRetryOptions,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments',
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     VpcConfiguration?: VpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
