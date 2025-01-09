<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property list<ExpectedRoute> $ExpectedRoutes
 * @property string $VpcId
 */
class NetworkFirewallMissingExpectedRoutesViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ExpectedRoutes?: list<ExpectedRoute>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
