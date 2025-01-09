<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TapeARN
 * @property string $TapeBarcode
 * @property int $TapeSizeInBytes
 * @property string $TapeStatus
 * @property string $GatewayARN
 * @property string $PoolId
 * @property \Aws\Api\DateTimeResult $RetentionStartDate
 * @property \Aws\Api\DateTimeResult $PoolEntryDate
 */
class TapeInfo extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string,
     *     TapeBarcode?: string,
     *     TapeSizeInBytes?: int,
     *     TapeStatus?: string,
     *     GatewayARN?: string,
     *     PoolId?: string,
     *     RetentionStartDate?: \Aws\Api\DateTimeResult,
     *     PoolEntryDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
