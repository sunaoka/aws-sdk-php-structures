<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ReplicateSecretToRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property list<Shapes\ReplicaRegionType> $AddReplicaRegions
 * @property bool|null $ForceOverwriteReplicaSecret
 */
class ReplicateSecretToRegionsRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     AddReplicaRegions: list<Shapes\ReplicaRegionType>,
     *     ForceOverwriteReplicaSecret?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
