<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property double|null $CurrentRateInMegaBytesPerSecond
 * @property int|null $TotalDataInMegaBytes
 * @property int|null $DataTransferredInMegaBytes
 * @property int|null $EstimatedTimeToCompletionInSeconds
 * @property int|null $ElapsedTimeInSeconds
 */
class DataTransferProgress extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     CurrentRateInMegaBytesPerSecond?: double|null,
     *     TotalDataInMegaBytes?: int|null,
     *     DataTransferredInMegaBytes?: int|null,
     *     EstimatedTimeToCompletionInSeconds?: int|null,
     *     ElapsedTimeInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
