<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property string $ReplicationInstanceArn
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     ReplicationInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
