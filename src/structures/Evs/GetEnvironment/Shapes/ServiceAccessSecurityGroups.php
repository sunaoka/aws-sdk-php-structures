<?php

namespace Sunaoka\Aws\Structures\Evs\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $securityGroups
 */
class ServiceAccessSecurityGroups extends Shape
{
    /**
     * @param array{securityGroups?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
