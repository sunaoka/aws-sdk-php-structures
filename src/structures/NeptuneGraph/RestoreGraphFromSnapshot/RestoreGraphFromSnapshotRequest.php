<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\RestoreGraphFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotIdentifier
 * @property string $graphName
 * @property int $provisionedMemory
 * @property bool $deletionProtection
 * @property array<string, string> $tags
 * @property int $replicaCount
 * @property bool $publicConnectivity
 */
class RestoreGraphFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     snapshotIdentifier: string,
     *     graphName: string,
     *     provisionedMemory?: int,
     *     deletionProtection?: bool,
     *     tags?: array<string, string>,
     *     replicaCount?: int,
     *     publicConnectivity?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
