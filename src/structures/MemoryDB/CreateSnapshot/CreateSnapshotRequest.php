<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $SnapshotName
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     SnapshotName: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
