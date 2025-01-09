<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TapeARN
 * @property \Aws\Api\DateTimeResult $TapeRecoveryPointTime
 * @property int $TapeSizeInBytes
 * @property string $TapeStatus
 */
class TapeRecoveryPointInfo extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string,
     *     TapeRecoveryPointTime?: \Aws\Api\DateTimeResult,
     *     TapeSizeInBytes?: int,
     *     TapeStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
