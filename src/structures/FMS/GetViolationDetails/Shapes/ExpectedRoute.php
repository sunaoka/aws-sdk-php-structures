<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpV4Cidr
 * @property string $PrefixListId
 * @property string $IpV6Cidr
 * @property list<string> $ContributingSubnets
 * @property list<string> $AllowedTargets
 * @property string $RouteTableId
 */
class ExpectedRoute extends Shape
{
    /**
     * @param array{
     *     IpV4Cidr?: string,
     *     PrefixListId?: string,
     *     IpV6Cidr?: string,
     *     ContributingSubnets?: list<string>,
     *     AllowedTargets?: list<string>,
     *     RouteTableId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
