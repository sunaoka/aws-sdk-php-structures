<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TapeARN
 * @property string|null $TapeBarcode
 * @property \Aws\Api\DateTimeResult|null $TapeCreatedDate
 * @property int|null $TapeSizeInBytes
 * @property string|null $TapeStatus
 * @property string|null $VTLDevice
 * @property double|null $Progress
 * @property int|null $TapeUsedInBytes
 * @property string|null $KMSKey
 * @property string|null $PoolId
 * @property bool|null $Worm
 * @property \Aws\Api\DateTimeResult|null $RetentionStartDate
 * @property \Aws\Api\DateTimeResult|null $PoolEntryDate
 */
class Tape extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string|null,
     *     TapeBarcode?: string|null,
     *     TapeCreatedDate?: \Aws\Api\DateTimeResult|null,
     *     TapeSizeInBytes?: int|null,
     *     TapeStatus?: string|null,
     *     VTLDevice?: string|null,
     *     Progress?: double|null,
     *     TapeUsedInBytes?: int|null,
     *     KMSKey?: string|null,
     *     PoolId?: string|null,
     *     Worm?: bool|null,
     *     RetentionStartDate?: \Aws\Api\DateTimeResult|null,
     *     PoolEntryDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
