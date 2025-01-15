<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RebootReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property bool|null $ForceFailover
 * @property bool|null $ForcePlannedFailover
 */
class RebootReplicationInstanceRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     ForceFailover?: bool|null,
     *     ForcePlannedFailover?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
