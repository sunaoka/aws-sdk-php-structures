<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServerReplicationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING' $replicationType
 * @property string|null $accountID
 */
class UpdateSourceServerReplicationTypeRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     replicationType: 'AGENT_BASED'|'SNAPSHOT_SHIPPING',
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
