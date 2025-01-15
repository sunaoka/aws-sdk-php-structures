<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property Occurrences|null $occurrences
 * @property string|null $type
 */
class DefaultDetection extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     occurrences?: Occurrences|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
