<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Vpc
 * @property string $Subnet
 * @property string $SubnetAvailabilityZone
 * @property string $CurrentAssociatedNetworkAcl
 * @property list<EntryViolation> $EntryViolations
 */
class InvalidNetworkAclEntriesViolation extends Shape
{
    /**
     * @param array{
     *     Vpc?: string,
     *     Subnet?: string,
     *     SubnetAvailabilityZone?: string,
     *     CurrentAssociatedNetworkAcl?: string,
     *     EntryViolations?: list<EntryViolation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
