<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NameServersUpdateState $nameServersUpdateState
 * @property R53HostedZoneDeletionState $r53HostedZoneDeletionState
 */
class RegisteredDomainDelegationInfo extends Shape
{
    /**
     * @param array{
     *     nameServersUpdateState?: NameServersUpdateState,
     *     r53HostedZoneDeletionState?: R53HostedZoneDeletionState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
