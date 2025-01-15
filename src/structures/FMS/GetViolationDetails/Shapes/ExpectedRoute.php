<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpV4Cidr
 * @property string|null $PrefixListId
 * @property string|null $IpV6Cidr
 * @property list<string>|null $ContributingSubnets
 * @property list<string>|null $AllowedTargets
 * @property string|null $RouteTableId
 */
class ExpectedRoute extends Shape
{
    /**
     * @param array{
     *     IpV4Cidr?: string|null,
     *     PrefixListId?: string|null,
     *     IpV6Cidr?: string|null,
     *     ContributingSubnets?: list<string>|null,
     *     AllowedTargets?: list<string>|null,
     *     RouteTableId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
