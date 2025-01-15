<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetIdentifier
 * @property AwsRdsDbSubnetGroupSubnetAvailabilityZone|null $SubnetAvailabilityZone
 * @property string|null $SubnetStatus
 */
class AwsRdsDbSubnetGroupSubnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string|null,
     *     SubnetAvailabilityZone?: AwsRdsDbSubnetGroupSubnetAvailabilityZone|null,
     *     SubnetStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
