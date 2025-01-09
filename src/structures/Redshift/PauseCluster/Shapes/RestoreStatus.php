<?php

namespace Sunaoka\Aws\Structures\Redshift\PauseCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property double $CurrentRestoreRateInMegaBytesPerSecond
 * @property int $SnapshotSizeInMegaBytes
 * @property int $ProgressInMegaBytes
 * @property int $ElapsedTimeInSeconds
 * @property int $EstimatedTimeToCompletionInSeconds
 */
class RestoreStatus extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     CurrentRestoreRateInMegaBytesPerSecond?: double,
     *     SnapshotSizeInMegaBytes?: int,
     *     ProgressInMegaBytes?: int,
     *     ElapsedTimeInSeconds?: int,
     *     EstimatedTimeToCompletionInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
