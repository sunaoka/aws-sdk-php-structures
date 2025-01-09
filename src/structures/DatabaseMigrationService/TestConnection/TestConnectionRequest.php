<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\TestConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property string $EndpointArn
 */
class TestConnectionRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     EndpointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
