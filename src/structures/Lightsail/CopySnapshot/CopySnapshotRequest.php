<?php

namespace Sunaoka\Aws\Structures\Lightsail\CopySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceSnapshotName
 * @property string $sourceResourceName
 * @property string $restoreDate
 * @property bool $useLatestRestorableAutoSnapshot
 * @property string $targetSnapshotName
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1' $sourceRegion
 */
class CopySnapshotRequest extends Request
{
    /**
     * @param array{
     *     sourceSnapshotName?: string,
     *     sourceResourceName?: string,
     *     restoreDate?: string,
     *     useLatestRestorableAutoSnapshot?: bool,
     *     targetSnapshotName: string,
     *     sourceRegion: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
