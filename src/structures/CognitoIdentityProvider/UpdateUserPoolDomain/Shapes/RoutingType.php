<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FailoverType|null $Failover
 */
class RoutingType extends Shape
{
    /**
     * @param array{Failover?: FailoverType|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
