<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
