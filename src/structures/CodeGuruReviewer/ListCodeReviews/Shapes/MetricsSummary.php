<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MeteredLinesOfCodeCount
 * @property int|null $SuppressedLinesOfCodeCount
 * @property int|null $FindingsCount
 */
class MetricsSummary extends Shape
{
    /**
     * @param array{
     *     MeteredLinesOfCodeCount?: int|null,
     *     SuppressedLinesOfCodeCount?: int|null,
     *     FindingsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
