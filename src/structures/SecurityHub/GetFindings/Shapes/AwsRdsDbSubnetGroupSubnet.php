<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetIdentifier
 * @property AwsRdsDbSubnetGroupSubnetAvailabilityZone $SubnetAvailabilityZone
 * @property string $SubnetStatus
 */
class AwsRdsDbSubnetGroupSubnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string,
     *     SubnetAvailabilityZone?: AwsRdsDbSubnetGroupSubnetAvailabilityZone,
     *     SubnetStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
