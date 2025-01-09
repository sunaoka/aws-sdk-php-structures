<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DaysGreaterThan
 * @property int $DaysLessThan
 */
class MatchObjectAge extends Shape
{
    /**
     * @param array{
     *     DaysGreaterThan?: int,
     *     DaysLessThan?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
