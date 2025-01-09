<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\RestoreGraphFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotIdentifier
 * @property string $graphName
 * @property int<16, 24576> $provisionedMemory
 * @property bool $deletionProtection
 * @property array<string, string> $tags
 * @property int<0, 2> $replicaCount
 * @property bool $publicConnectivity
 */
class RestoreGraphFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     snapshotIdentifier: string,
     *     graphName: string,
     *     provisionedMemory?: int<16, 24576>,
     *     deletionProtection?: bool,
     *     tags?: array<string, string>,
     *     replicaCount?: int<0, 2>,
     *     publicConnectivity?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
