<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property double $CurrentRateInMegaBytesPerSecond
 * @property int $TotalDataInMegaBytes
 * @property int $DataTransferredInMegaBytes
 * @property int $EstimatedTimeToCompletionInSeconds
 * @property int $ElapsedTimeInSeconds
 */
class DataTransferProgress extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     CurrentRateInMegaBytesPerSecond?: double,
     *     TotalDataInMegaBytes?: int,
     *     DataTransferredInMegaBytes?: int,
     *     EstimatedTimeToCompletionInSeconds?: int,
     *     ElapsedTimeInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
