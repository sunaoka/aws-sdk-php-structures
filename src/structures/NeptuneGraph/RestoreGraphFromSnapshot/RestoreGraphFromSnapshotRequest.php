<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\RestoreGraphFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotIdentifier
 * @property string $graphName
 * @property int<16, 24576>|null $provisionedMemory
 * @property bool|null $deletionProtection
 * @property array<string, string>|null $tags
 * @property int<0, 2>|null $replicaCount
 * @property bool|null $publicConnectivity
 */
class RestoreGraphFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     snapshotIdentifier: string,
     *     graphName: string,
     *     provisionedMemory?: int<16, 24576>|null,
     *     deletionProtection?: bool|null,
     *     tags?: array<string, string>|null,
     *     replicaCount?: int<0, 2>|null,
     *     publicConnectivity?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
