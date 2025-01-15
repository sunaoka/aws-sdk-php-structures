<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TapeARN
 * @property string|null $TapeBarcode
 * @property int|null $TapeSizeInBytes
 * @property string|null $TapeStatus
 * @property string|null $GatewayARN
 * @property string|null $PoolId
 * @property \Aws\Api\DateTimeResult|null $RetentionStartDate
 * @property \Aws\Api\DateTimeResult|null $PoolEntryDate
 */
class TapeInfo extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string|null,
     *     TapeBarcode?: string|null,
     *     TapeSizeInBytes?: int|null,
     *     TapeStatus?: string|null,
     *     GatewayARN?: string|null,
     *     PoolId?: string|null,
     *     RetentionStartDate?: \Aws\Api\DateTimeResult|null,
     *     PoolEntryDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
