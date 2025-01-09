<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CancelMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalCount
 * @property int $succeededCount
 * @property int $skippedCount
 * @property int $failedCount
 */
class MetadataTransferJobProgress extends Shape
{
    /**
     * @param array{
     *     totalCount?: int,
     *     succeededCount?: int,
     *     skippedCount?: int,
     *     failedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
