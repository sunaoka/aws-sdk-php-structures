<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $oAuthScopes
 */
class HoneycodeMetadata extends Shape
{
    /**
     * @param array{oAuthScopes?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
