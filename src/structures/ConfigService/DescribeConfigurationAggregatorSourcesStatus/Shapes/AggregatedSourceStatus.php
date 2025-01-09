<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregatorSourcesStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceId
 * @property 'ACCOUNT'|'ORGANIZATION' $SourceType
 * @property string $AwsRegion
 * @property 'FAILED'|'SUCCEEDED'|'OUTDATED' $LastUpdateStatus
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property string $LastErrorCode
 * @property string $LastErrorMessage
 */
class AggregatedSourceStatus extends Shape
{
    /**
     * @param array{
     *     SourceId?: string,
     *     SourceType?: 'ACCOUNT'|'ORGANIZATION',
     *     AwsRegion?: string,
     *     LastUpdateStatus?: 'FAILED'|'SUCCEEDED'|'OUTDATED',
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     LastErrorCode?: string,
     *     LastErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
