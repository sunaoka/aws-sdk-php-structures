<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomDataIdentifiersDetections> $Detections
 * @property int $TotalCount
 */
class CustomDataIdentifiersResult extends Shape
{
    /**
     * @param array{
     *     Detections?: list<CustomDataIdentifiersDetections>,
     *     TotalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
