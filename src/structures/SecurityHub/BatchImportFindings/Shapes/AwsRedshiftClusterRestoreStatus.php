<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $CurrentRestoreRateInMegaBytesPerSecond
 * @property int|null $ElapsedTimeInSeconds
 * @property int|null $EstimatedTimeToCompletionInSeconds
 * @property int|null $ProgressInMegaBytes
 * @property int|null $SnapshotSizeInMegaBytes
 * @property string|null $Status
 */
class AwsRedshiftClusterRestoreStatus extends Shape
{
    /**
     * @param array{
     *     CurrentRestoreRateInMegaBytesPerSecond?: double|null,
     *     ElapsedTimeInSeconds?: int|null,
     *     EstimatedTimeToCompletionInSeconds?: int|null,
     *     ProgressInMegaBytes?: int|null,
     *     SnapshotSizeInMegaBytes?: int|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
