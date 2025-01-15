<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RefreshSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointArn
 * @property string|null $ReplicationInstanceArn
 * @property 'successful'|'failed'|'refreshing'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastRefreshDate
 * @property string|null $LastFailureMessage
 */
class RefreshSchemasStatus extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string|null,
     *     ReplicationInstanceArn?: string|null,
     *     Status?: 'successful'|'failed'|'refreshing'|null,
     *     LastRefreshDate?: \Aws\Api\DateTimeResult|null,
     *     LastFailureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
