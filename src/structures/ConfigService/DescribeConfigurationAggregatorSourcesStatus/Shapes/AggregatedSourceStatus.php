<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregatorSourcesStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceId
 * @property 'ACCOUNT'|'ORGANIZATION'|null $SourceType
 * @property string|null $AwsRegion
 * @property 'FAILED'|'SUCCEEDED'|'OUTDATED'|null $LastUpdateStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property string|null $LastErrorCode
 * @property string|null $LastErrorMessage
 */
class AggregatedSourceStatus extends Shape
{
    /**
     * @param array{
     *     SourceId?: string|null,
     *     SourceType?: 'ACCOUNT'|'ORGANIZATION'|null,
     *     AwsRegion?: string|null,
     *     LastUpdateStatus?: 'FAILED'|'SUCCEEDED'|'OUTDATED'|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     LastErrorCode?: string|null,
     *     LastErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
