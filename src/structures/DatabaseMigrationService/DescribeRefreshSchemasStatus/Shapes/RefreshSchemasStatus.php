<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRefreshSchemasStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointArn
 * @property string $ReplicationInstanceArn
 * @property 'successful'|'failed'|'refreshing' $Status
 * @property \Aws\Api\DateTimeResult $LastRefreshDate
 * @property string $LastFailureMessage
 */
class RefreshSchemasStatus extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string,
     *     ReplicationInstanceArn?: string,
     *     Status?: 'successful'|'failed'|'refreshing',
     *     LastRefreshDate?: \Aws\Api\DateTimeResult,
     *     LastFailureMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
