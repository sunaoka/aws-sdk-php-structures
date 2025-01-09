<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Rule
 */
class MatchingRule extends Shape
{
    /**
     * @param array{Rule: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
