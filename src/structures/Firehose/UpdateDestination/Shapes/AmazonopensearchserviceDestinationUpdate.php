<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $DomainARN
 * @property string|null $ClusterEndpoint
 * @property string|null $IndexName
 * @property string|null $TypeName
 * @property 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth'|null $IndexRotationPeriod
 * @property AmazonopensearchserviceBufferingHints|null $BufferingHints
 * @property AmazonopensearchserviceRetryOptions|null $RetryOptions
 * @property S3DestinationUpdate|null $S3Update
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property DocumentIdOptions|null $DocumentIdOptions
 */
class AmazonopensearchserviceDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     DomainARN?: string|null,
     *     ClusterEndpoint?: string|null,
     *     IndexName?: string|null,
     *     TypeName?: string|null,
     *     IndexRotationPeriod?: 'NoRotation'|'OneHour'|'OneDay'|'OneWeek'|'OneMonth'|null,
     *     BufferingHints?: AmazonopensearchserviceBufferingHints|null,
     *     RetryOptions?: AmazonopensearchserviceRetryOptions|null,
     *     S3Update?: S3DestinationUpdate|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     DocumentIdOptions?: DocumentIdOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
