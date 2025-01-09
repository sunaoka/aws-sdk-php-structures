<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TapeARN
 * @property string $TapeBarcode
 * @property \Aws\Api\DateTimeResult $TapeCreatedDate
 * @property int $TapeSizeInBytes
 * @property string $TapeStatus
 * @property string $VTLDevice
 * @property double $Progress
 * @property int $TapeUsedInBytes
 * @property string $KMSKey
 * @property string $PoolId
 * @property bool $Worm
 * @property \Aws\Api\DateTimeResult $RetentionStartDate
 * @property \Aws\Api\DateTimeResult $PoolEntryDate
 */
class Tape extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string,
     *     TapeBarcode?: string,
     *     TapeCreatedDate?: \Aws\Api\DateTimeResult,
     *     TapeSizeInBytes?: int,
     *     TapeStatus?: string,
     *     VTLDevice?: string,
     *     Progress?: double,
     *     TapeUsedInBytes?: int,
     *     KMSKey?: string,
     *     PoolId?: string,
     *     Worm?: bool,
     *     RetentionStartDate?: \Aws\Api\DateTimeResult,
     *     PoolEntryDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
