<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MeteredLinesOfCodeCount
 * @property int $SuppressedLinesOfCodeCount
 * @property int $FindingsCount
 */
class Metrics extends Shape
{
    /**
     * @param array{
     *     MeteredLinesOfCodeCount?: int,
     *     SuppressedLinesOfCodeCount?: int,
     *     FindingsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
