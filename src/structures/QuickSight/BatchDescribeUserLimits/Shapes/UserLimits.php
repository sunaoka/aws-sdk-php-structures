<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDescribeUserLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userName
 * @property string $namespace
 * @property list<EffectiveLimit> $effectiveLimits
 */
class UserLimits extends Shape
{
    /**
     * @param array{
     *     userName: string,
     *     namespace: string,
     *     effectiveLimits: list<EffectiveLimit>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
