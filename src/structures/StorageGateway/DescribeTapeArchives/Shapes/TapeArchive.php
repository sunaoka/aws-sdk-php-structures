<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeArchives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TapeARN
 * @property string|null $TapeBarcode
 * @property \Aws\Api\DateTimeResult|null $TapeCreatedDate
 * @property int|null $TapeSizeInBytes
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $RetrievedTo
 * @property string|null $TapeStatus
 * @property int|null $TapeUsedInBytes
 * @property string|null $KMSKey
 * @property string|null $PoolId
 * @property bool|null $Worm
 * @property \Aws\Api\DateTimeResult|null $RetentionStartDate
 * @property \Aws\Api\DateTimeResult|null $PoolEntryDate
 */
class TapeArchive extends Shape
{
    /**
     * @param array{
     *     TapeARN?: string|null,
     *     TapeBarcode?: string|null,
     *     TapeCreatedDate?: \Aws\Api\DateTimeResult|null,
     *     TapeSizeInBytes?: int|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     RetrievedTo?: string|null,
     *     TapeStatus?: string|null,
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
