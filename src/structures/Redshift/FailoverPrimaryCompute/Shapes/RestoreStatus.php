<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property double|null $CurrentRestoreRateInMegaBytesPerSecond
 * @property int|null $SnapshotSizeInMegaBytes
 * @property int|null $ProgressInMegaBytes
 * @property int|null $ElapsedTimeInSeconds
 * @property int|null $EstimatedTimeToCompletionInSeconds
 */
class RestoreStatus extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     CurrentRestoreRateInMegaBytesPerSecond?: double|null,
     *     SnapshotSizeInMegaBytes?: int|null,
     *     ProgressInMegaBytes?: int|null,
     *     ElapsedTimeInSeconds?: int|null,
     *     EstimatedTimeToCompletionInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
