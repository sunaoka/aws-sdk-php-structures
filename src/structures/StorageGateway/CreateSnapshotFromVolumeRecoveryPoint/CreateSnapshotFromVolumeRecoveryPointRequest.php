<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSnapshotFromVolumeRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 * @property string $SnapshotDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotFromVolumeRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     VolumeARN: string,
     *     SnapshotDescription: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
