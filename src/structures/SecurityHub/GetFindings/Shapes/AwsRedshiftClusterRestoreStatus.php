<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $CurrentRestoreRateInMegaBytesPerSecond
 * @property int $ElapsedTimeInSeconds
 * @property int $EstimatedTimeToCompletionInSeconds
 * @property int $ProgressInMegaBytes
 * @property int $SnapshotSizeInMegaBytes
 * @property string $Status
 */
class AwsRedshiftClusterRestoreStatus extends Shape
{
    /**
     * @param array{
     *     CurrentRestoreRateInMegaBytesPerSecond?: double,
     *     ElapsedTimeInSeconds?: int,
     *     EstimatedTimeToCompletionInSeconds?: int,
     *     ProgressInMegaBytes?: int,
     *     SnapshotSizeInMegaBytes?: int,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
