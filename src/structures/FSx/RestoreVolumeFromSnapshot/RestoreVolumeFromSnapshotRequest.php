<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $VolumeId
 * @property string $SnapshotId
 * @property list<'DELETE_INTERMEDIATE_SNAPSHOTS'|'DELETE_CLONED_VOLUMES'>|null $Options
 */
class RestoreVolumeFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     VolumeId: string,
     *     SnapshotId: string,
     *     Options?: list<'DELETE_INTERMEDIATE_SNAPSHOTS'|'DELETE_CLONED_VOLUMES'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
