<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $VolumeId
 * @property string $SourceSnapshotARN
 * @property 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY' $CopyStrategy
 * @property list<'DELETE_INTERMEDIATE_SNAPSHOTS'|'DELETE_CLONED_VOLUMES'|'DELETE_INTERMEDIATE_DATA'> $Options
 */
class CopySnapshotAndUpdateVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     VolumeId: string,
     *     SourceSnapshotARN: string,
     *     CopyStrategy?: 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY',
     *     Options?: list<'DELETE_INTERMEDIATE_SNAPSHOTS'|'DELETE_CLONED_VOLUMES'|'DELETE_INTERMEDIATE_DATA'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
