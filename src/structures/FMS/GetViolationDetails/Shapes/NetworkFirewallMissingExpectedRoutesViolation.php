<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property list<ExpectedRoute>|null $ExpectedRoutes
 * @property string|null $VpcId
 */
class NetworkFirewallMissingExpectedRoutesViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     ExpectedRoutes?: list<ExpectedRoute>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
