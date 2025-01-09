<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServerReplicationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING' $replicationType
 * @property string $sourceServerID
 */
class UpdateSourceServerReplicationTypeRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     replicationType: 'AGENT_BASED'|'SNAPSHOT_SHIPPING',
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
