<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDiskSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $diskName
 * @property string $diskSnapshotName
 * @property string|null $instanceName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDiskSnapshotRequest extends Request
{
    /**
     * @param array{
     *     diskName?: string|null,
     *     diskSnapshotName: string,
     *     instanceName?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
