<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $SnapshotName
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     SnapshotName: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
