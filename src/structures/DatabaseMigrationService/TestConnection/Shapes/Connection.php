<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationInstanceArn
 * @property string $EndpointArn
 * @property string $Status
 * @property string $LastFailureMessage
 * @property string $EndpointIdentifier
 * @property string $ReplicationInstanceIdentifier
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ReplicationInstanceArn?: string,
     *     EndpointArn?: string,
     *     Status?: string,
     *     LastFailureMessage?: string,
     *     EndpointIdentifier?: string,
     *     ReplicationInstanceIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
