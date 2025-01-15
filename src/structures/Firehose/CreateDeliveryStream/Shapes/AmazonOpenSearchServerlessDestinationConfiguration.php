<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string|null $CollectionEndpoint
 * @property string $IndexName
 * @property AmazonOpenSearchServerlessBufferingHints|null $BufferingHints
 * @property AmazonOpenSearchServerlessRetryOptions|null $RetryOptions
 * @property 'FailedDocumentsOnly'|'AllDocuments'|null $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property VpcConfiguration|null $VpcConfiguration
 */
class AmazonOpenSearchServerlessDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     CollectionEndpoint?: string|null,
     *     IndexName: string,
     *     BufferingHints?: AmazonOpenSearchServerlessBufferingHints|null,
     *     RetryOptions?: AmazonOpenSearchServerlessRetryOptions|null,
     *     S3BackupMode?: 'FailedDocumentsOnly'|'AllDocuments'|null,
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     VpcConfiguration?: VpcConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
