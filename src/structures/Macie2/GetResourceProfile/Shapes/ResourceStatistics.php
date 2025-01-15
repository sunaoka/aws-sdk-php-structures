<?php

namespace Sunaoka\Aws\Structures\Macie2\GetResourceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalBytesClassified
 * @property int|null $totalDetections
 * @property int|null $totalDetectionsSuppressed
 * @property int|null $totalItemsClassified
 * @property int|null $totalItemsSensitive
 * @property int|null $totalItemsSkipped
 * @property int|null $totalItemsSkippedInvalidEncryption
 * @property int|null $totalItemsSkippedInvalidKms
 * @property int|null $totalItemsSkippedPermissionDenied
 */
class ResourceStatistics extends Shape
{
    /**
     * @param array{
     *     totalBytesClassified?: int|null,
     *     totalDetections?: int|null,
     *     totalDetectionsSuppressed?: int|null,
     *     totalItemsClassified?: int|null,
     *     totalItemsSensitive?: int|null,
     *     totalItemsSkipped?: int|null,
     *     totalItemsSkippedInvalidEncryption?: int|null,
     *     totalItemsSkippedInvalidKms?: int|null,
     *     totalItemsSkippedPermissionDenied?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
