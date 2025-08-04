<?php

namespace Sunaoka\Aws\Structures\Lightsail\CopySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $sourceSnapshotName
 * @property string|null $sourceResourceName
 * @property string|null $restoreDate
 * @property bool|null $useLatestRestorableAutoSnapshot
 * @property string $targetSnapshotName
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'|'ap-southeast-3' $sourceRegion
 */
class CopySnapshotRequest extends Request
{
    /**
     * @param array{
     *     sourceSnapshotName?: string|null,
     *     sourceResourceName?: string|null,
     *     restoreDate?: string|null,
     *     useLatestRestorableAutoSnapshot?: bool|null,
     *     targetSnapshotName: string,
     *     sourceRegion: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'ca-central-1'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'ap-northeast-2'|'eu-north-1'|'ap-southeast-3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
