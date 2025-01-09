<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int $count
 * @property string $name
 * @property Occurrences $occurrences
 */
class CustomDetection extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     count?: int,
     *     name?: string,
     *     occurrences?: Occurrences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
