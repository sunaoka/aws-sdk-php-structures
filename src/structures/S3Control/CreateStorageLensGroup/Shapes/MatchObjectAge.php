<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DaysGreaterThan
 * @property int|null $DaysLessThan
 */
class MatchObjectAge extends Shape
{
    /**
     * @param array{
     *     DaysGreaterThan?: int|null,
     *     DaysLessThan?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
