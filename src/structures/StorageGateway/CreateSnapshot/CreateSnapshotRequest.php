<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 * @property string $SnapshotDescription
 * @property list<Shapes\Tag> $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     VolumeARN: string,
     *     SnapshotDescription: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
