<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property int|null $count
 * @property string|null $name
 * @property Occurrences|null $occurrences
 */
class CustomDetection extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     count?: int|null,
     *     name?: string|null,
     *     occurrences?: Occurrences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
