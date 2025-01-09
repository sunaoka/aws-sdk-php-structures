<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $CollectionEndpoint
 * @property string $IndexName
 * @property AmazonOpenSearchServerlessBufferingHints $BufferingHints
 * @property AmazonOpenSearchServerlessRetryOptions $RetryOptions
 * @property S3DestinationUpdate $S3Update
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 */
class AmazonOpenSearchServerlessDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string,
     *     CollectionEndpoint?: string,
     *     IndexName?: string,
     *     BufferingHints?: AmazonOpenSearchServerlessBufferingHints,
     *     RetryOptions?: AmazonOpenSearchServerlessRetryOptions,
     *     S3Update?: S3DestinationUpdate,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
