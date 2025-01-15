<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomDetection>|null $detections
 * @property int|null $totalCount
 */
class CustomDataIdentifiers extends Shape
{
    /**
     * @param array{
     *     detections?: list<CustomDetection>|null,
     *     totalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
