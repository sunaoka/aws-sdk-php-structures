<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalCount
 * @property int|null $succeededCount
 * @property int|null $skippedCount
 * @property int|null $failedCount
 */
class MetadataTransferJobProgress extends Shape
{
    /**
     * @param array{
     *     totalCount?: int|null,
     *     succeededCount?: int|null,
     *     skippedCount?: int|null,
     *     failedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
