<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotTier;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SnapshotId
 * @property \Aws\Api\DateTimeResult|null $RestoreStartTime
 * @property int|null $RestoreDuration
 * @property bool|null $IsPermanentRestore
 */
class RestoreSnapshotTierResponse extends Response
{
}
