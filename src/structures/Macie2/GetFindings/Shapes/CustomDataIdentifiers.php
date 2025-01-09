<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomDetection> $detections
 * @property int $totalCount
 */
class CustomDataIdentifiers extends Shape
{
    /**
     * @param array{
     *     detections?: list<CustomDetection>,
     *     totalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
