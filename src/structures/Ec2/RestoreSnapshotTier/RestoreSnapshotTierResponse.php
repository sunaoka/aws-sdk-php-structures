<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotTier;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotId
 * @property \Aws\Api\DateTimeResult $RestoreStartTime
 * @property int $RestoreDuration
 * @property bool $IsPermanentRestore
 */
class RestoreSnapshotTierResponse extends Response
{
}
