<?php

namespace Sunaoka\Aws\Structures\Connect\ReplicateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ReplicaRegion
 * @property string|null $ClientToken
 * @property string $ReplicaAlias
 */
class ReplicateInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ReplicaRegion: string,
     *     ClientToken?: string|null,
     *     ReplicaAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
