<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $scopes
 */
class RegisteredPagerDutyDetails extends Shape
{
    /**
     * @param array{scopes: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
