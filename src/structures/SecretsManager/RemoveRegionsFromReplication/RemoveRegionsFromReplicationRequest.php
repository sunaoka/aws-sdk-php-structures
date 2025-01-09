<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RemoveRegionsFromReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property list<string> $RemoveReplicaRegions
 */
class RemoveRegionsFromReplicationRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     RemoveReplicaRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
