<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property All|null $All
 * @property list<string>|null $IncludedPaths
 */
class JsonMatchPattern extends Shape
{
    /**
     * @param array{
     *     All?: All|null,
     *     IncludedPaths?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
