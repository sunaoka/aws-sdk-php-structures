<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $CollectionEndpoint
 * @property string|null $IndexName
 * @property AmazonOpenSearchServerlessBufferingHints|null $BufferingHints
 * @property AmazonOpenSearchServerlessRetryOptions|null $RetryOptions
 * @property S3DestinationUpdate|null $S3Update
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 */
class AmazonOpenSearchServerlessDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     CollectionEndpoint?: string|null,
     *     IndexName?: string|null,
     *     BufferingHints?: AmazonOpenSearchServerlessBufferingHints|null,
     *     RetryOptions?: AmazonOpenSearchServerlessRetryOptions|null,
     *     S3Update?: S3DestinationUpdate|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
