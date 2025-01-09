<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

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
 * @property S3DestinationUpdate $S3Update
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property DocumentIdOptions $DocumentIdOptions
 */
class ElasticsearchDestinationUpdate extends Shape
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
     *     S3Update?: S3DestinationUpdate,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     DocumentIdOptions?: DocumentIdOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
