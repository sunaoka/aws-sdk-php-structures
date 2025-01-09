<?php

namespace Sunaoka\Aws\Structures\Macie2\GetResourceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalBytesClassified
 * @property int $totalDetections
 * @property int $totalDetectionsSuppressed
 * @property int $totalItemsClassified
 * @property int $totalItemsSensitive
 * @property int $totalItemsSkipped
 * @property int $totalItemsSkippedInvalidEncryption
 * @property int $totalItemsSkippedInvalidKms
 * @property int $totalItemsSkippedPermissionDenied
 */
class ResourceStatistics extends Shape
{
    /**
     * @param array{
     *     totalBytesClassified?: int,
     *     totalDetections?: int,
     *     totalDetectionsSuppressed?: int,
     *     totalItemsClassified?: int,
     *     totalItemsSensitive?: int,
     *     totalItemsSkipped?: int,
     *     totalItemsSkippedInvalidEncryption?: int,
     *     totalItemsSkippedInvalidKms?: int,
     *     totalItemsSkippedPermissionDenied?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
