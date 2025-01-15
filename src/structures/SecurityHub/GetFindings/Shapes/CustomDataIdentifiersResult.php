<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomDataIdentifiersDetections>|null $Detections
 * @property int|null $TotalCount
 */
class CustomDataIdentifiersResult extends Shape
{
    /**
     * @param array{
     *     Detections?: list<CustomDataIdentifiersDetections>|null,
     *     TotalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
