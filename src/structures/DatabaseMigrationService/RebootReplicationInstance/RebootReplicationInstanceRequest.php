<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RebootReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property bool $ForceFailover
 * @property bool $ForcePlannedFailover
 */
class RebootReplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     ForceFailover?: bool,
     *     ForcePlannedFailover?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
