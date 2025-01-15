<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\CreateClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterArn
 * @property string $snapshotName
 * @property array<string, string>|null $tags
 */
class CreateClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     clusterArn: string,
     *     snapshotName: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
