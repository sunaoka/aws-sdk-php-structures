<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property Occurrences $occurrences
 * @property string $type
 */
class DefaultDetection extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     occurrences?: Occurrences,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
