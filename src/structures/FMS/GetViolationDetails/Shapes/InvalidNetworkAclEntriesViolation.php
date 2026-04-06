<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Vpc
 * @property string|null $Subnet
 * @property string|null $SubnetAvailabilityZone
 * @property string|null $CurrentAssociatedNetworkAcl
 * @property list<EntryViolation>|null $EntryViolations
 */
class InvalidNetworkAclEntriesViolation extends Shape
{
    /**
     * @param array{
     *     Vpc?: string|null,
     *     Subnet?: string|null,
     *     SubnetAvailabilityZone?: string|null,
     *     CurrentAssociatedNetworkAcl?: string|null,
     *     EntryViolations?: list<EntryViolation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
