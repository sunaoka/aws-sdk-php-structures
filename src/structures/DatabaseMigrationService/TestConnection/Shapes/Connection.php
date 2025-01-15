<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationInstanceArn
 * @property string|null $EndpointArn
 * @property string|null $Status
 * @property string|null $LastFailureMessage
 * @property string|null $EndpointIdentifier
 * @property string|null $ReplicationInstanceIdentifier
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ReplicationInstanceArn?: string|null,
     *     EndpointArn?: string|null,
     *     Status?: string|null,
     *     LastFailureMessage?: string|null,
     *     EndpointIdentifier?: string|null,
     *     ReplicationInstanceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
