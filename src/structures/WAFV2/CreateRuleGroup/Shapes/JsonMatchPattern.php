<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property All $All
 * @property list<string> $IncludedPaths
 */
class JsonMatchPattern extends Shape
{
    /**
     * @param array{
     *     All?: All,
     *     IncludedPaths?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
