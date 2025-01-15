<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SubnetIds
 * @property string|null $VPCId
 */
class AwsElasticsearchDomainVPCOptions extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetIds?: list<string>|null,
     *     VPCId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
