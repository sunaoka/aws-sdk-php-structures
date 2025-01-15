<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VPCId
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $SecurityGroupIds
 */
class VPCDerivedInfo extends Shape
{
    /**
     * @param array{
     *     VPCId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     AvailabilityZones?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
