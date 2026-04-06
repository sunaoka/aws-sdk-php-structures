<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_AFTER_SINGLE_PASS'|'NONE'|null $PlacementFallbackStrategy
 * @property list<string> $LocationOrder
 */
class PriorityConfigurationOverride extends Shape
{
    /**
     * @param array{
     *     PlacementFallbackStrategy?: 'DEFAULT_AFTER_SINGLE_PASS'|'NONE'|null,
     *     LocationOrder: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
