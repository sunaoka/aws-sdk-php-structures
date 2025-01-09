<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeArchives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TapeARN
 * @property string $TapeBarcode
 * @property \Aws\Api\DateTimeResult $TapeCreatedDate
 * @property int $TapeSizeInBytes
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $RetrievedTo
 * @property string $TapeStatus
 * @property int $TapeUsedInBytes
 * @property string $KMSKey
 * @property string $PoolId
 * @property bool $Worm
 * @property \Aws\Api\DateTimeResult $RetentionStartDate
 * @property \Aws\Api\DateTimeResult $PoolEntryDate
 */
class TapeArchive extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string,
     *     TapeBarcode?: string,
     *     TapeCreatedDate?: \Aws\Api\DateTimeResult,
     *     TapeSizeInBytes?: int,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     RetrievedTo?: string,
     *     TapeStatus?: string,
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
