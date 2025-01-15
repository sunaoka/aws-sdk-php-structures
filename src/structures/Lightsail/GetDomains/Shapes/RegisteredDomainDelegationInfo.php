<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NameServersUpdateState|null $nameServersUpdateState
 * @property R53HostedZoneDeletionState|null $r53HostedZoneDeletionState
 */
class RegisteredDomainDelegationInfo extends Shape
{
    /**
     * @param array{
     *     nameServersUpdateState?: NameServersUpdateState|null,
     *     r53HostedZoneDeletionState?: R53HostedZoneDeletionState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
