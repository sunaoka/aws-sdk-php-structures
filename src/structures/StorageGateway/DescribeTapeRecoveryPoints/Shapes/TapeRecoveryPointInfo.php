<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TapeARN
 * @property \Aws\Api\DateTimeResult|null $TapeRecoveryPointTime
 * @property int|null $TapeSizeInBytes
 * @property string|null $TapeStatus
 */
class TapeRecoveryPointInfo extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string|null,
     *     TapeRecoveryPointTime?: \Aws\Api\DateTimeResult|null,
     *     TapeSizeInBytes?: int|null,
     *     TapeStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
