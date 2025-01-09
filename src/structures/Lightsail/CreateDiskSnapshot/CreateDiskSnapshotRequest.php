<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDiskSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property string $diskSnapshotName
 * @property string $instanceName
 * @property list<Shapes\Tag> $tags
 */
class CreateDiskSnapshotRequest extends Request
{
    /**
     * @param array{
     *     diskName?: string,
     *     diskSnapshotName: string,
     *     instanceName?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
